<?php
class ControllerExtensionModuleFeaturedCategories extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured_categories');

		$this->load->model('catalog/category');

		$this->load->model('tool/image');

		$data['categories'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['category'])) {
			$categories = array_slice($setting['category'], 0, (int)$setting['limit']);

			foreach ($categories as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
					if ($category_info['image']) {
						$image = $this->model_tool_image->resize($category_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					$description = (strlen($category_info['description']) > 150) ? substr($category_info['description'], 0, 150) . '...' : $category_info['description'];

					$data['categories'][] = array(
						'category_id'  => $category_info['category_id'],
						'thumb'       => $image,
						'name'        => $category_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($description)), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_category_description_length')),
						'href'        => $this->url->link('product/category', 'path=' . $category_info['category_id'])
					);
				}
			}
		}

		if ($data['categories']) {
			return $this->load->view('extension/module/featured_categories', $data);
		}
	}
}