<?
	class Animal{
		private $name = 'Animal';
		public function __construct($name)
		{
			$this->name = $name;
			echo "Eu sunt $name".'<br>';
		}
		public function move()
		{
			echo "$this->name se misca";
		}
		public function masa ()
		{
			$var = $_Get['masa'];
			echo "$this->name masa $var";
		}
		public function eat()
		{
			echo "$this->name maninca";
		}
	}
 ?>