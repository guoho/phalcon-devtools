<?php 

namespace Phalcon\Db {

	/**
	 * Phalcon\Db\Index
	 *
	 * Allows to define indexes to be used on tables. Indexes are a common way
	 * to enhance database performance. An index allows the database server to find
	 * and retrieve specific rows much faster than it could do without an index.
	 *
	 */
	
	class Index {

		protected $_indexName;

		protected $_columns;

		/**
		 * \Phalcon\Db\Index constructor
		 *
		 * @param string $indexName
		 * @param array $columns
		 */
		public function __construct($indexName, $columns){ }


		/**
		 * Gets the index name
		 *
		 * @return string
		 */
		public function getName(){ }


		/**
		 * Gets the columns that comprends the index
		 *
		 * @return array
		 */
		public function getColumns(){ }


		/**
		 * Restore a \Phalcon\Db\Index object from export
		 *
		 * @param array $data
		 * @return \Phalcon\Db\IndexInterface
		 */
		public static function __set_state($data){ }

	}
}
