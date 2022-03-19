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

            // Sort actual array
			$this->sortArray();

			$str = '';
			foreach ($this->data as $item) {
				$str.= $item . ', ';
			}

			// Display concatenated string by removing trailing comma & space
			return print substr($str, 0, -2);
		}
	}
}

$sort = new Sort([3, 2, -4, 8, 10, 5, 78]);
$sort->display();
