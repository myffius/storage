<?php

	class TestHandler extends RJQueryHandler
	{
		public function handle()
		{
			$this->addClass('error');
			$this->removeClass('valid');
		}

		public function blur()
		{
			$this->hide();
		}

		public function submit()
		{
			$this->show();
		}
	}