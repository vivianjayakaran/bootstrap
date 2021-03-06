<?php

namespace Todo;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;



class TaskRepository extends Repository
{


	public function getTable()
	{
		return $this->connection->query('SELECT * FROM task ');
	}


	/**
	 * @return Nette\Database\Table\Selection
	 */
	public function findIncompleteByUser($userId)
	{
		return $this->findIncomplete()->where(array(
			'user_id' => $userId
		));
	}


	/**
	 * @param int $listId
	 * @param string $task
	 * @param int $assignedUser
	 * @return Nette\Database\Table\ActiveRow
	 */
	public function createTask($description)
	{	
		return $this->connection->query('
			INSERT INTO `bootstrap`.`task` (`id`, `text`, `created`, `done`, `user_id`, `project_id`, `list_id`) VALUES
			 (NULL, "'.$description.'", CURRENT_TIMESTAMP ,0,1,1,2)');

	}


	/**
	 * @param int $id
	 */
	public function markDone($id,$value)
	{
		//$this->findBy(array('id' => $id))->update(array('done' => $value));
		return $this->connection->query('
			UPDATE task
			SET done = '.$value.'
			WHERE id = '.$id
		);
	}

}
