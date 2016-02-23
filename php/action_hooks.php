<?php

add_action('relevant_resources', 'display_relevant_resources');
function display_relevant_resources() {
	$display = get_field("display", get_the_ID());
	if($display[0] == 1):
		$resource_ids = get_field("resources", get_the_ID());
		$resources = array();
		foreach($resource_ids as $resource_id):
			$resource = new Resource($resource_id['resource']->ID);
			$resource_JSON = $resource->toJSON();
			$resource_object = json_decode($resource_JSON);
			$resources[] = new DetailedListItem(
				$resource_object->title,
				$resource_object->description,
				$resource_object->link,
				array(
					"link_label" => $resource_object->link_label,
					"tag" => ucwords(str_replace(array("-"), " ", $resource_object->type))
				)
			);
		endforeach;
		$Detailed_List = new DetailedList($resources);
		$Detailed_List->slider();
	endif;
}