<?php

	class RJQueryHandler
	{
		public $source = '';

		public function addClass($class)
		{
			$this->source .= 'this.addClass(\''.$class.'\');';
		}

		public function removeClass($class)
		{
			$this->source .= 'this.removeClass(\''.$class.'\');';
		}

		public function hide()
		{
			$this->source .= 'this.hide();';
		}

		public function show()
		{
			$this->source .= 'this.show();';
		}

		public function getScript()
		{
			return $this->source;
		}
	}