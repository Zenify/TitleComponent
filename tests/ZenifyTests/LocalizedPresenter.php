<?php

namespace ZenifyTests;

use Nette;


class LocalizedPresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @inject
	 * @var \Zenify\TitleComponent\IControlFactory
	 */
	public $titleControlFactory;



	/**
	 * @title homepage.title.english
	 */
	public function renderHomepage()
	{
	}


	/**
	 * @param string $name
	 */
	public function renderUser($name)
	{
		$this['title']->set(['user.detail.name', NULL, ['name' => $name]]);
	}


	/**
	 * @return \Zenify\TitleComponent\Control
	 */
	protected function createComponentTitle()
	{
		return $this->titleControlFactory->create();
	}


	/**
	 * So we don't need templates for presenter
	 * @throws Nette\Application\AbortException
	 */
	public function sendTemplate()
	{
		$this->terminate();
	}

}
