<?php
class Sort {
	private $data;

	public function __construct($arr = null)
    {
		if ( isset($arr) ) {
			$this->data = $arr;
		}
	}

	/*
	 * Sorting array in ascending order
	 */
	private function sortArray()
    {
		sort($this->data);
	}

	/*
	 * Display a sorted array
	 */
	public function display()
    {
		if ( is_array($this->data) ) {

            // Sort an actual array
			$this->sortArray();

			$tmp = [];
			foreach ($this->data as $item) {
				$tmp[] = $item;
			}

			// Display sorted array
			return print implode(', ', $tmp);
		}
	}
}

$sort = new Sort([3, 2, -4, 8, 10, 5, 78]);
$sort->display();
