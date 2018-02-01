<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 01.02.2018
 * Time: 17:42
 */

namespace Todo\Models;

use DateTime;

class Task
{
//	Think about, what we wont to store
    protected $id;

    protected $complete = false;

    protected $description;

    protected $due;

    public function setDescription($description)
    {
    	$this->description = $description;
    }

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param bool $complete
	 */
	public function setComplete($complete = true)
	{
		$this->complete = $complete;
	}

	public function getComplete()
	{
		return (bool) $this->complete;
	}

	public function setDue(DateTime $due )
	{
		$this->due = $due;
	}

	public function getDue()
	{
		if (!$this->due instanceof DateTime) {
			return new DateTime($this->due);
		}
		return $this->due;
	}

	public function getId()
	{
		return $this->id;
	}
}