<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
                die("here");
		$this->render('index');
	}
}