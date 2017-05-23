<?php
/**
 * CI 数据库参考
 */
/**
 * 目录：
 * 数据库配置,连接数据库,数据库查询,数据库插入
 */
/**
 * 	数据库配置
 */
/**
 * 	 CodeIgniter 有一个配置文件用来保存数据库配置（用户名、密码、数据库名等等），
 *   这个配置文件位于 application/config/database.php
 */
// 配置存放在一个多维数组里，原型如下:
	$db['default'] = array(
	    'dsn'   => '',
	    'hostname' => 'localhost',
	    'username' => 'root',
	    'password' => '',
	    'database' => 'database_name',
	    'dbdriver' => 'mysqli',
	    'dbprefix' => '',
	    'pconnect' => TRUE,
	    'db_debug' => TRUE,
	    'cache_on' => FALSE,
	    'cachedir' => '',
	    'char_set' => 'utf8',
	    'dbcollat' => 'utf8_general_ci',
	    'swap_pre' => '',
	    'encrypt' => FALSE,
	    'compress' => FALSE,
	    'stricton' => FALSE,
	    'failover' => array()
	);


/**
 * 	有些数据库驱动（例如：PDO，PostgreSQL，Oracle，ODBC）可能需要提供完整的 DSN 字符串。
 * 	在这种情况下，你需要使用 'dsn' 配置参数，就好像使用该驱动的 PHP 原生扩展一样。例如:
 */
	// PDO
	$db['default']['dsn'] = 'pgsql:host=localhost;port=5432;dbname=database_name';

	// Oracle
	$db['default']['dsn'] = '//localhost/XE';

/**
 * 当主数据库由于某些原因无法连接时，你还可以配置故障转移（failover）。可以像下面这样为一个连接配置故障转移:
 */
	//你可以指定任意多个故障转移
	$db['default']['failover'] = array(
	        array(
	            'hostname' => 'localhost1',
	            'username' => '',
	            'password' => '',
	            'database' => '',
	            'dbdriver' => 'mysqli',
	            'dbprefix' => '',
	            'pconnect' => TRUE,
	            'db_debug' => TRUE,
	            'cache_on' => FALSE,
	            'cachedir' => '',
	            'char_set' => 'utf8',
	            'dbcollat' => 'utf8_general_ci',
	            'swap_pre' => '',
	            'encrypt' => FALSE,
	            'compress' => FALSE,
	            'stricton' => FALSE
	        ),
	        array(
	            'hostname' => 'localhost2',
	            'username' => '',
	            'password' => '',
	            'database' => '',
	            'dbdriver' => 'mysqli',
	            'dbprefix' => '',
	            'pconnect' => TRUE,
	            'db_debug' => TRUE,
	            'cache_on' => FALSE,
	            'cachedir' => '',
	            'char_set' => 'utf8',
	            'dbcollat' => 'utf8_general_ci',
	            'swap_pre' => '',
	            'encrypt' => FALSE,
	            'compress' => FALSE,
	            'stricton' => FALSE
	        )
	    );
	/**
	 * 我们使用多维数组的原因是为了让你随意的存储多个连接值的设置，
	 * 例如：如果你有多个环境（开发、生产、测试 等等），你能为每个环境建立独立的连接组，
	 * 并在组之间进行切换。举个例子，如果要设置一个“test”环境，你可以这样做:
	 */
	$db['test'] = array(
	    'dsn'   => '',
	    'hostname' => 'localhost',
	    'username' => 'root',
	    'password' => '',
	    'database' => 'database_name',
	    'dbdriver' => 'mysqli',
	    'dbprefix' => '',
	    'pconnect' => TRUE,
	    'db_debug' => TRUE,
	    'cache_on' => FALSE,
	    'cachedir' => '',
	    'char_set' => 'utf8',
	    'dbcollat' => 'utf8_general_ci',
	    'swap_pre' => '',
	    'compress' => FALSE,
	    'encrypt' => FALSE,
	    'stricton' => FALSE,
	    'failover' => array()
	);
	// 然后，设置位于配置文件中的 $active_group 变量，告诉系统要使用“test”组:
	$active_group = 'test';

/**
 * 查询构造器
 */
/**
 * 可以通过数据库配置文件里的 $query_builder 变量对查询构造器类
 * 进行全局的设定（启用设成 TRUE，禁用设成 FALSE，默认是 TRUE）。
 * 如果你不用这个类，那么你可以通过将这个变量值设置成 FALSE 来减
 * 少在数据库类初始化时对电脑资源的消耗。
 */
	$query_builder = TRUE;

/************************************************************************************************
 * 连接数据库(2种方法连接)
 */
/**
 * 自动连接
 * 	   “自动连接” 特性将在每一个页面加载时自动实例化数据库类。
 * 	    要启用“自动连接”， 可在 application/config/autoload.php
 * 	    中的 library 数组里添加 database:
 */
	$autoload['libraries'] = array('database');

/**
 * 手动连接
 * 		如果你只有一部分页面需要数据库连接，你可以在那些有
 * 		需要的函数里手工添加 如下代码来连接数据库，或者写在
 * 		类的构造函数里，让整个类都可以访问：
 */
	$this->load->database();
	/**
	 * database()中的可用参数
	 * 			可用的参数
	 * 			A 数据库连接值，用数组或DSN字符串传递；
	 * 			B TRUE/FALSE (boolean) - 是否返回连接ID（参考下文的“连接多数据库”）；
	 * 			C TRUE/FALSE (boolean) - 是否启用查询构造器类，默认为 TRUE 。
	 */
/**
 *  手动连接到数据库
 *  	这个函数的第一个参数是**可选的**，被用来从你的配置文件中指
 *  	定一个特定的数据库组，甚至可以使用没有在配置文件中定义的数
 *  	据库连接值。下面是例子：
 *  	从你的配置文件中选择一个特定分组:
 */
	// group_name 是你的配置文件中连接组的名字
	$this->load->database('group_name');

	// 连接一个完全手动指定的数据库，可以传一个数组参数:
	$config['hostname'] = 'localhost';
	$config['username'] = 'myusername';
	$config['password'] = 'mypassword';
	$config['database'] = 'mydatabase';
	$config['dbdriver'] = 'mysqli';
	$config['dbprefix'] = '';
	$config['pconnect'] = FALSE;
	$config['db_debug'] = TRUE;
	$config['cache_on'] = FALSE;
	$config['cachedir'] = '';
	$config['char_set'] = 'utf8';
	$config['dbcollat'] = 'utf8_general_ci';
	$this->load->database($config);

	// *对于 PDO 驱动，你应该使用 $config['dsn'] 取代 'hostname' 和 'database' 参数：
	$config['dsn'] = 'mysql:host=localhost;dbname=mydatabase';

/**
 * 或者你可以使用数据源名称（DSN，Data Source Name）作为参数，DSN 的格式必须类似于下面这样:
 */
	$dsn = 'dbdriver://username:password@hostname/database';
	$this->load->database($dsn);

	//当用 DSN 字符串连接时，要覆盖默认配置，可以像添加查询字符串一样添加配置变量。
	$dsn = 'dbdriver://username:password@hostname/database?char_set=utf8&dbcollat=utf8_general_ci&cache_on=true&cachedir=/path/to/cache';
	$this->load->database($dsn);

/**
 * 连接到多个数据库
 */
	$DB1 = $this->load->database('group_one', TRUE);
	$DB2 = $this->load->database('group_two', TRUE);
	// *注意：将 "group_one" 和 "group_two" 修改为你要连接的组名称 （或者像上面介绍的那样传入连接值数组）
	// 		 第二个参数 TRUE 表示函数将返回数据库对象。

/**
 * 当你使用这种方式连接数据库时，你将通过你的对象名来执行数据库命令，
 * 而不再是通过这份指南中通篇介绍的，就像下面这样的语法了：
 */

	// $this->db->query();
	// $this->db->result();
	// etc...
/**
 * 取而代之的，你将这样执行数据库命令：
 */

	$DB1->query();
	$DB1->result();
	// etc...

/**
 * 如果你只是需要切换到同一个连接的另一个不同的数据库，
 * 你没必要创建 独立的数据库配置，你可以像下面这样切换到另一个数据库
 */
	$this->db->db_select($database2_name);

// 重新连接 / 保持连接有效
// 		当你在处理一些重量级的 PHP 操作时（例如处理图片），如果超过了数据库的超时值，
// 		你应该考虑在执行后续查询之前先调用 reconnect() 方法向数据库发送 ping 命令，
// 		这样可以优雅的保持连接有效或者重新建立起连接。
	$this->db->reconnect();

/**
 * 手动关闭连接
 */
	$this->db->close();

/******************************************************************
 * 		数据库查询
 */

/**********************
 * 多结果标准查询---对象形式
 */
	$query = $this->db->query('SELECT name, title, email FROM my_table');
	//	result() 函数返回一个数组对象
	//	该方法是 result_object() 方法的别名
	foreach ($query->result() as $row)
	{
	    echo $row->title;
	    echo $row->name;
	    echo $row->email;
	}

	echo 'Total Results: ' . $query->num_rows();



/**
 * free_result() 方法
 * 		该方法释放掉查询结果所占的内存，并删除结果的资源标识。
 * 		通常来说， PHP 会在脚本执行结束后自动释放内存。但是，
 * 		如果你在某个脚本中执行大量的查询， 你可能需要在每次查
 * 		询之后释放掉查询结果，以此来降低内存消耗。
 */

	$query = $this->db->query('SELECT title FROM my_table');
	foreach ($query->result() as $row)
	{
	    echo $row->title;
	}

	$query->free_result();  // The $query result object will no longer be available

	$query2 = $this->db->query('SELECT name FROM some_table');

	$row = $query2->row();
	echo $row->name;
	$query2->free_result(); // The $query2 result object will no longer be available

/**
 * 你还可以传一个字符串参数给 result() 方法，这个字符串参数代表
 * 你想要把每个结果转换成某个类的类名（这个类必须已经加载）
 */
	$query = $this->db->query("SELECT * FROM users;");

	foreach ($query->result('User') as $user)
	{
	    echo $user->name; // access attributes
	    echo $user->reverse_name(); // or methods defined on the 'User' class
	}



/**
 * 多结果标准查询---数组形式
 */
	$query = $this->db->query('SELECT name, title, email FROM my_table');
	// result_array() 函数返回数组
	foreach ($query->result_array() as $row)
	{
	    echo $row['title'];
	    echo $row['name'];
	    echo $row['email'];
	}

/**
 * 单结果查询--对象形式
 */
	// row()返回一个对象
	// 这个方法返回单独一行结果。如果你的查询不止一行结果，它只返回第一行
	$query = $this->db->query('SELECT name FROM my_table LIMIT 1');
	$row = $query->row();
	echo $row->name;
// 如果你要返回特定行的数据，你可以将行号作为第一个参数传给这个方法:
	$row = $query->row(5);

// 你还可以加上第二个参数，该参数为字符串类型，代表你想要把结果转换成某个类的类名:
	$query = $this->db->query("SELECT * FROM users LIMIT 1;");
	$row = $query->row(0, 'User');

	echo $row->name; // access attributes
	echo $row->reverse_name(); // or methods defined on the 'User' class


// 另外，你可以使用下面这些方法从你的结果集中获取前一个、后一个、 第一个或者最后一个结果：

    $row = $query->first_row()
    $row = $query->last_row()
    $row = $query->next_row()
    $row = $query->previous_row()

// 这些方法默认返回对象，如果需要返回数组形式，将单词 "array" 作为参数传入方法即可：

    $row = $query->first_row('array')
    $row = $query->last_row('array')
    $row = $query->next_row('array')
    $row = $query->previous_row('array')


/**
 * 单结果标准查询--数组形式
 */
	$query = $this->db->query('SELECT name FROM my_table LIMIT 1');
	// row_array()返回一个数组
	$row = $query->row_array();
	echo $row['name'];



/**
 * 使用查询构造器查询数据
 */

	$query = $this->db->get('table_name');

	foreach ($query->result() as $row)
	{
	    echo $row->title;
	}


/**
 * data_seek() 方法
 * 		这个方法用来设置下一个结果行的内部指针，它只有在
 * 		和 unbuffered_row() 方法一起使用才有效果。它接受
 * 		一个正整数参数（默认值为0）表示想要读取的下一行，
 * 		返回值为 TRUE 或 FALSE 表示成功或失败。
 */
	$query = $this->db->query('SELECT `field_name` FROM `table_name`');
	$query->data_seek(5); // Skip the first 5 rows
	$row = $query->unbuffered_row();
	// **并不是所有的数据库驱动器都支持这一特性，调用这个方法将会返回 FALSE， 例如你无法在 PDO 上使用它。


// 上面所有的这些方法都会把所有的结果加载到内存里（预读取）， 当处理大结果集时最好使用 unbuffered_row() 方法。
/**
 * unbuffered_row() 方法
 * 		这个方法和 row() 方法一样返回单独一行结果，但是它不会预读取
 * 		所有的结果数据到内存中。 如果你的查询结果不止一行，它将返回
 * 		当前一行，并通过内部实现的指针来移动到下一行。
 */
	$query = $this->db->query("YOUR QUERY");

	while ($row = $query->unbuffered_row())
	{
	    echo $row->title;
	    echo $row->name;
	    echo $row->body;
	}

// 为了指定返回值的类型，可以传一个字符串参数 'object'（默认值） 或者 'array' 给这个方法:

/****************************
 * 结果辅助方法
 */

/**
 * num_rows() 方法
 * 	 该方法返回查询结果的行数。注意：在这个例子中，$query 变量为查询结果对象:
 */
	$query = $this->db->query('SELECT * FROM my_table');
	echo $query->num_rows();
	// 并不是所有的数据库驱动器都有原生的方法来获取查询结果的总行数。
	// 当遇到这种情况时，所有的数据会被预读取到内存中，并调用count()函数来取得总行数。

/**
 * num_fields() 方法
 *   该方法返回查询结果的字段数（列数）。在你的查询结果对象上调用该方法:
 */
	$query = $this->db->query('SELECT * FROM my_table');
	echo $query->num_fields();

/**
 * field_data($table)
 * 	Parameters:
 *		$table (string) – The table name
 *	Returns:
 *		Array of field data items or FALSE on failure
 *	Return type:
 *		array Gets a list containing field data about a table.
 */
	$data = $this->db->field_data('articles');
	var_dump($data);

/**
 * list_fields($table)
 *   Parameters:
 *     $table (string) – The table name
 *   Returns:
 *     Array of field names or FALSE on failure
 *   Return type:	array
 *   Gets a list of the field names in a table.
 */
	$data = $this->db->list_fields('articles');
	var_dump($data);
	// 返回结果：
	array(4) { [0]=> string(2) "id" [1]=> string(5) "title" [2]=> string(7) "content" [3]=> string(7) "user_id" }

/******
 * 关于执行查询的信息
 * $this->db->insert_id()
 * 		当执行 INSERT 语句时，这个方法返回新插入行的ID
 * $this->db->affected_rows()
 * 		当执行 INSERT、UPDATE 等写类型的语句时，这个方法返回受影响的行数。
 * $this->db->last_query()
 * 		该方法返回上一次执行的查询语句
 */
	$str = $this->db->last_query();

/******
 * 关于数据库的信息
 */
$this->db->count_all()
	// 该方法用于获取数据表的总行数，第一个参数为表名，例如:
	echo $this->db->count_all('my_table');

$this->db->platform()
	// 该方法输出你正在使用的数据库平台（MySQL，MS SQL，Postgres 等）:
	echo $this->db->platform();

$this->db->version()
	// 该方法输出你正在使用的数据库版本:
	echo $this->db->version();

$this->db->insert_string()
	// 这个方法简化了 INSERT 语句的书写，它返回一个正确格式化的 INSERT 语句。 举例:
	$data = array('name' => $name, 'email' => $email, 'url' => $url);
	$str = $this->db->insert_string('table_name', $data);
	//第一个参数为表名，第二个参数是一个关联数组，表示待插入的数据。 上面的例子生成的 SQL 语句如下:
	// INSERT INTO table_name (name, email, url) VALUES ('Rick', 'rick@example.com', 'example.com')

$this->db->update_string()
	// 这个方法简化了 UPDATE 语句的书写，它返回一个正确格式化的 UPDATE 语句。 举例:
	$data = array('name' => $name, 'email' => $email, 'url' => $url);
	$where = "author_id = 1 AND status = 'active'";
	$str = $this->db->update_string('table_name', $data, $where);
	// UPDATE table_name SET name = 'Rick', email = 'rick@example.com', url = 'example.com' WHERE author_id = 1 AND status = 'active'

$this->db->get_compiled_select()
	// 该方法和 $this->db->get() 方法一样编译 SELECT 查询并返回查询的 SQL 语句， 但是，该方法并不执行它
	$sql = $this->db->get_compiled_select('mytable');
	echo $sql;
	// Prints string: SELECT * FROM mytable
	// 第二个参数用于设置是否重置查询（默认会重置，和使用 $this->db->get() 方法时一样）
	echo $this->db->limit(10,20)->get_compiled_select('mytable', FALSE);
	// Prints string: SELECT * FROM mytable LIMIT 20, 10
	// (in MySQL. Other databases have slightly different syntax)

	echo $this->db->select('title, content, date')->get_compiled_select();
	// Prints string: SELECT title, content, date FROM mytable LIMIT 20, 10

// 上面的例子中，最值得注意的是，第二个查询并没有用到 $this->db->from() 方法， 也没有为
// 查询指定表名参数，但是它生成的 SQL 语句中有 FROM mytable 子句。 这是因为查询并没有被
// 重置（使用 $this->db->get() 方法查询会被执行并被重置， 使用 $this->db->reset_query()
// 方法直接重置）。

$this->db->get_where()
	// 这个方法基本上和上面的方法一样，但它提供了第二个参数可以让你添加一个 WHERE 子句， 而不是使用 db->where() 方法:
	$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);

$this->db->select()
	// 该方法用于编写查询语句中的 SELECT 子句
	$this->db->select('title, content, date');
	$query = $this->db->get('mytable');
	// Executes: SELECT title, content, date FROM mytable

// $this->db->select() 方法的第二个参数可选，如果设置为 FALSE，
// CodeIgniter 将不保护你的 表名和字段名，这在当你编写复合查询
// 语句时很有用，不会破坏你编写的语句。
	$this->db->select('(SELECT SUM(payments.amount) FROM payments WHERE payments.invoice_id=4) AS amount_paid', FALSE);
	$query = $this->db->get('mytable');

$this->db->select_max()
	//	该方法用于编写查询语句中的 SELECT MAX(field) 部分，你可以使用第二个参数（可选）重命名结果字段。
	$this->db->select_max('age');
	$query = $this->db->get('members');  // Produces: SELECT MAX(age) as age FROM members

	$this->db->select_max('age', 'member_age');
	$query = $this->db->get('members'); // Produces: SELECT MAX(age) as member_age FROM members

$this->db->select_min()
	// 该方法用于编写查询语句中的 SELECT MIN(field) 部分，和 select_max() 方法一样，
	// 你可以使用第二个参数（可选）重命名结果字段。
	$this->db->select_min('age');
	$query = $this->db->get('members'); // Produces: SELECT MIN(age) as age FROM members

$this->db->select_avg()
	// 该方法用于编写查询语句中的 SELECT AVG(field) 部分，和 select_max() 方法一样， 你可以使用第二个参数（可选）重命名结果字段。
	$this->db->select_avg('age');
	$query = $this->db->get('members'); // Produces: SELECT AVG(age) as age FROM members

$this->db->select_sum()
	// 该方法用于编写查询语句中的 SELECT SUM(field) 部分，和 select_max() 方法一样， 你可以使用第二个参数（可选）重命名结果字段。
	$this->db->select_sum('age');
	$query = $this->db->get('members'); // Produces: SELECT SUM(age) as age FROM members

$this->db->from()
	// 该方法用于编写查询语句中的 FROM 子句:
	$this->db->select('title, content, date');
	$this->db->from('mytable');
	$query = $this->db->get();  // Produces: SELECT title, content, date FROM mytable

$this->db->join()
	// 该方法用于编写查询语句中的 JOIN 子句:
	$this->db->select('*');
	$this->db->from('blogs');
	$this->db->join('comments', 'comments.id = blogs.id');
	$query = $this->db->get();
	// Produces:
	// SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
	// 如果你的查询中有多个连接，你可以多次调用这个方法
	// 你可以传入第三个参数指定连接的类型，有这样几种选择：left，right，outer，inner，left outer 和 right outer
	$this->db->join('comments', 'comments.id = blogs.id', 'left');
	// Produces: LEFT JOIN comments ON comments.id = blogs.id

$this->db->where()
	A 简单的 key/value 方式:
		$this->db->where('name', $name); // Produces: WHERE name = 'Joe'
		// 注意自动为你加上了等号。

		// 如果你多次调用该方法，那么多个 WHERE 条件将会使用 AND 连接起来：
		$this->db->where('name', $name);
		$this->db->where('title', $title);
		$this->db->where('status', $status);
		// WHERE name = 'Joe' AND title = 'boss' AND status = 'active'

	B 自定义 key/value 方式:
		// 为了控制比较，你可以在第一个参数中包含一个比较运算符
		$this->db->where('name !=', $name);
		$this->db->where('id <', $id); // Produces: WHERE name != 'Joe' AND id < 45

	C 关联数组方式:
		$array = array('name' => $name, 'title' => $title, 'status' => $status);
		$this->db->where($array);
		// Produces: WHERE name = 'Joe' AND title = 'boss' AND status = 'active'

		// 你也可以在这个方法里包含你自己的比较运算符：
		$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
		$this->db->where($array);

	D 自定义字符串:
		// 你可以完全手工编写 WHERE 子句:
		$where = "name='Joe' AND status='boss' OR status='active'";
		$this->db->where($where);

		// $this->db->where() 方法有一个可选的第三个参数，如果设置为 FALSE，
		// CodeIgniter 将不保护你的表名和字段名
		$this->db->where('MATCH (field) AGAINST ("value")', NULL, FALSE);

$this->db->or_where()
	这个方法和上面的方法一样，只是多个 WHERE 条件之间使用 OR 进行连接:
		$this->db->where('name !=', $name);
		$this->db->or_where('id >', $id);  // Produces: WHERE name != 'Joe' OR id > 50

$this->db->where_in()
	该方法用于生成 WHERE IN 子句，多个子句之间使用 AND 连接
		$names = array('Frank', 'Todd', 'James');
		$this->db->where_in('username', $names);
		// Produces: WHERE username IN ('Frank', 'Todd', 'James')

$this->db->or_where_in()
	该方法用于生成 WHERE IN 子句，多个子句之间使用 OR 连接
		$names = array('Frank', 'Todd', 'James');
		$this->db->or_where_in('username', $names);
		// Produces: OR username IN ('Frank', 'Todd', 'James')

$this->db->where_not_in()
	该方法用于生成 WHERE NOT IN 子句，多个子句之间使用 AND 连接
	$names = array('Frank', 'Todd', 'James');
	$this->db->where_not_in('username', $names);
	// Produces: WHERE username NOT IN ('Frank', 'Todd', 'James')

$this->db->or_where_not_in()
	该方法用于生成 WHERE NOT IN 子句，多个子句之间使用 OR 连接
		$names = array('Frank', 'Todd', 'James');
		$this->db->or_where_not_in('username', $names);
		// Produces: OR username NOT IN ('Frank', 'Todd', 'James')

/******
 * 模糊搜索
 */
$this->db->like()
// 该方法用于生成 LIKE 子句，在进行搜索时非常有用。
	A 简单 key/value 方式:
		$this->db->like('title', 'match');
		// Produces: WHERE `title` LIKE '%match%' ESCAPE '!'

		如果你多次调用该方法，那么多个 WHERE 条件将会使用 AND 连接起来:
		$this->db->like('title', 'match');
		$this->db->like('body', 'match');
		// WHERE `title` LIKE '%match%' ESCAPE '!' AND  `body` LIKE '%match% ESCAPE '!'

		可以传入第三个可选的参数来控制 LIKE 通配符（%）的位置，可用选项有：'before'，'after' 和 'both' (默认为 'both')
		$this->db->like('title', 'match', 'before');    // Produces: WHERE `title` LIKE '%match' ESCAPE '!'
		$this->db->like('title', 'match', 'after'); // Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
		$this->db->like('title', 'match', 'both');  // Produces: WHERE `title` LIKE '%match%' ESCAPE '!'

	B 关联数组方式:
		$array = array('title' => $match, 'page1' => $match, 'page2' => $match);
		$this->db->like($array);
		// WHERE `title` LIKE '%match%' ESCAPE '!' AND  `page1` LIKE '%match%' ESCAPE '!' AND  `page2` LIKE '%match%' ESCAPE '!'

$this->db->or_like()
	// 这个方法和上面的方法一样，只是多个 WHERE 条件之间使用 OR 进行连接:
		$this->db->like('title', 'match'); $this->db->or_like('body', $match);
		// WHERE `title` LIKE '%match%' ESCAPE '!' OR  `body` LIKE '%match%' ESCAPE '!'

$this->db->not_like()
	// 这个方法和 like() 方法一样，只是生成 NOT LIKE 子句:
	$this->db->not_like('title', 'match');  // WHERE `title` NOT LIKE '%match% ESCAPE '!'

$this->db->or_not_like()
	$this->db->like('title', 'match');
	$this->db->or_not_like('body', 'match');
	// WHERE `title` LIKE '%match% OR  `body` NOT LIKE '%match%' ESCAPE '!'

$this->db->group_by()
	$this->db->group_by("title"); // Produces: GROUP BY title
	$this->db->group_by(array("title", "date"));  // Produces: GROUP BY title, date

$this->db->distinct()
	// 该方法用于向查询中添加 DISTINCT 关键字：
	$this->db->distinct();
	$this->db->get('table'); // Produces: SELECT DISTINCT * FROM table

$this->db->having()
	// 该方法用于生成 HAVING 子句，有下面两种不同的语法:
	$this->db->having('user_id = 45');  // Produces: HAVING user_id = 45
	$this->db->having('user_id',  45);  // Produces: HAVING user_id = 45

	// 你也可以通过一个数组传入多个值:
	$this->db->having(array('title =' => 'My Title', 'id <' => $id));
	// Produces: HAVING title = 'My Title', id < 45

	// 如果 CodeIgniter 自动转义你的查询，为了避免转义，你可以将第三个参数设置为 FALSE
	$this->db->having('user_id',  45);  // Produces: HAVING `user_id` = 45 in some databases such as MySQL
	$this->db->having('user_id',  45, FALSE);  // Produces: HAVING user_id = 45

$this->db->or_having()
	// 该方法和 having() 方法一样，只是多个条件之间使用 OR 进行连接。


/**
 * 排序
 */
$this->db->order_by()
	// 该方法用于生成 ORDER BY 子句
	// 第一个参数为你想要排序的字段名，第二个参数用于设置排序的方向，
	// 可选项有： ASC（升序），DESC（降序）和 RANDOM （随机）
	$this->db->order_by('title', 'DESC');
	// Produces: ORDER BY `title` DESC

	// 第一个参数也可以是你自己的排序字符串:
	$this->db->order_by('title DESC, name ASC');
	// Produces: ORDER BY `title` DESC, `name` ASC

	// 如果需要根据多个字段进行排序，可以多次调用该方法
	$this->db->order_by('title', 'DESC');
	$this->db->order_by('name', 'ASC');
	// Produces: ORDER BY `title` DESC, `name` ASC

	// 如果你选择了 RANDOM （随机排序），第一个参数会被忽略，但是你可以传入一个 数字值，作为随机数的 seed
	$this->db->order_by('title', 'RANDOM');
	// Produces: ORDER BY RAND()

	$this->db->order_by(42, 'RANDOM');
	// Produces: ORDER BY RAND(42)

/******
 * 分页与计数
 */
$this->db->limit()
// 该方法用于限制你的查询返回结果的数量:
	$this->db->limit(10);  // Produces: LIMIT 10
// 第二个参数可以用来设置偏移
	// Produces: LIMIT 20, 10 (in MySQL.  Other databases have slightly different syntax)
	$this->db->limit(10, 20);

$this->db->count_all_results()
// 该方法用于获取特定查询返回结果的数量，也可以使用查询构造器的这些
// 方法： where()，or_where()，like()，or_like() 等等
	echo $this->db->count_all_results('my_table');  // Produces an integer, like 25
	$this->db->like('title', 'match');
	$this->db->from('my_table');
	echo $this->db->count_all_results(); // Produces an integer, like 17
// 但是，这个方法会重置你在 select() 方法里设置的所有值，如果你希望
// 保留它们，可以将 第二个参数设置为 FALSE
	echo $this->db->count_all_results('my_table', FALSE);

$this->db->count_all()
	// 该方法用于获取某个表的总行数，第一个参数为表名:
	echo $this->db->count_all('my_table');  // Produces an integer, like 25



/******
 * 查询条件组
 */
// 查询条件组可以让你生成用括号括起来的一组 WHERE 条件，这能创造出非常复杂
// 的 WHERE 子句， 支持嵌套的条件组。例如:
		$this->db->select('*')->from('my_table')
		    ->group_start()
		        ->where('a', 'a')
		        ->or_group_start()
		            ->where('b', 'b')
		            ->where('c', 'c')
		        ->group_end()
		    ->group_end()
		    ->where('d', 'd')
		->get();
		// Generates:
		// SELECT * FROM (`my_table`) WHERE ( `a` = 'a' OR ( `b` = 'b' AND `c` = 'c' ) ) AND `d` = 'd'
	// **条件组必须要配对，确保每个 group_start() 方法都有一个 group_end() 方法与之配对。

$this->db->group_start()
// 开始一个新的条件组，为查询中的 WHERE 条件添加一个左括号

$this->db->or_group_start()
// 开始一个新的条件组，为查询中的 WHERE 条件添加一个左括号，并在前面加上 OR

$this->db->not_group_start()
// 开始一个新的条件组，为查询中的 WHERE 条件添加一个左括号，并在前面加上 NOT

$this->db->or_not_group_start()
// 开始一个新的条件组，为查询中的 WHERE 条件添加一个左括号，并在前面加上 OR NOT

$this->db->group_end()
// 结束当前的条件组，为查询中的 WHERE 条件添加一个右括号





/*******
 * 查询构造类
 */
$this->db->get()
	// 该方法执行 SELECT 语句并返回查询结果，可以得到一个表的所有数据:
	$query = $this->db->get('mytable');  // Produces: SELECT * FROM mytable

	// 第二和第三个参数用于设置 LIMIT 子句:
	$query = $this->db->get('mytable', 10, 20);
		// Executes: SELECT * FROM mytable LIMIT 20, 10
		// (in MySQL. Other databases have slightly different syntax)


/******
 * 生成查询结果
 */


/**
 * 初始化数据库类
 */
	$this->load->database();

/**
 * 指定数据库前缀
 */
	$this->db->dbprefix('tablename'); // outputs prefix_tablename

/**
 * 如果你想动态的修改这个前缀，而又不希望创建一个新的数据库连接，
 * 可以使用这个方法:
 */
	$this->db->set_dbprefix('newprefix');
	$this->db->dbprefix('tablename'); // outputs newprefix_tablename

/**
 * 保护标识符
 *
 * 在很多数据库里，保护表名和字段名是可取的，例如在 MySQL
 * 数据库里使用反引号。使用查询构造器会自动保护标识符，尽
 * 管如此，你还是可以像下面这样手工来保护:
 */
 	$this->db->protect_identifiers('table_name');
 	//这个函数也可以为你的表名添加一个前缀，如果你在数据库
 	//配置文件中定义了 dbprefix 参数，通过将这个函数的第二
 	//个参数设置为 TRUE 来启用前缀:
 	$this->db->protect_identifiers('table_name', TRUE);

/**
 *  转义查询
 *  	在提交数据到你的数据库之前，确保先对其进行转义是个非常不错的做法。
 */
	// A $this->db->escape() 这个函数会检测数据类型，仅转义字符串类型的数据。
	//   它会自动用单引号将你的数据括起来，你不用手动添加：
	$sql = "INSERT INTO table (title) VALUES(".$this->db->escape($title).")";

	// B $this->db->escape_str() 这个函数忽略数据类型，对传入的数据进行转义，
	//   这个方法并不常用，一般情况都是使用上面的那个方法。方法的使用代码如下：
	$sql = "INSERT INTO table (title) VALUES('".$this->db->escape_str($title)."')";

	// C $this->db->escape_like_str() 这个函数用于处理 LIKE 语句中的字符串,
	//   这样，LIKE 通配符（'%', '_'）可以被正确的转义
	$search = '20% raise';
	$sql = "SELECT id FROM table WHERE column LIKE '%" .
    		$this->db->escape_like_str($search)."%' ESCAPE '!'";
    		// *重要: The escape_like_str() method uses '!' (exclamation mark) to
    		// escape special characters for LIKE conditions. Because this method escapes
    		// partial strings that you would wrap in quotes yourself, it cannot
    		// automatically add the ESCAPE '!' condition for you, and so you'll
    		// have to manually do that.

/**
 *  查询绑定
 *  	查询绑定可以简化你的查询语法，它通过系统自动的为你将各个查询组装在一起。 参考下面的例子:
 */
	$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
	$this->db->query($sql, array(3, 'live', 'Rick'));

// 也可以使用数组的数组进行绑定，里面的数组会被转换成 IN 语句的集合:
	$sql = "SELECT * FROM some_table WHERE id IN ? AND status = ? AND author = ?";
	$this->db->query($sql, array(array(3, 6), 'live', 'Rick'));
	//上面的例子会被转换为这样的查询:
	SELECT * FROM some_table WHERE id IN (3,6) AND status = 'live' AND author = 'Rick'


/********************
 * 错误处理
 */
	$this->db->error();
// 要获取最近一次发生的错误，使用 error() 方法可以得到一个包含错误代码和错误消息的数组
	if ( ! $this->db->simple_query('SELECT `example_field` FROM `example_table`'))
	{
	    $error = $this->db->error(); // Has keys 'code' and 'message'
	}













/******************************************************************
/**
 * 		数据库插入
 */

/**
 * 标准插入
 */
	$sql = "INSERT INTO mytable (title, name) VALUES (".$this->db->escape($title).", ".$this->db->escape($name).")";
	$this->db->query($sql);
	echo $this->db->affected_rows();
/**
 * 使用查询构造器插入数据
 */
	$data = array(
	    'title' => $title,
	    'name' => $name,
	    'date' => $date
	);

	//
	// 生成这样的SQL代码:
	//   INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
	//
	$this->db->insert('mytable', $data);


/******
 * 插入数据
 */
$this->db->insert()
// 该方法根据你提供的数据生成一条 INSERT 语句并执行，
// 它的参数是一个**数组** 或一个**对象**，下面是使用数组的例子
	$data = array(
	    'title' => 'My title',
	    'name' => 'My Name',
	    'date' => 'My date'
	);

	// 第一个参数为要插入的表名，第二个参数为要插入的数据，是个关联数组
	$this->db->insert('mytable', $data);
	// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')


	下面是使用对象的例子:
	/*
	class Myclass {
	    public $title = 'My Title';
	    public $content = 'My Content';
	    public $date = 'My Date';
	}
	*/
	$object = new Myclass;
	$this->db->insert('mytable', $object);
	// Produces: INSERT INTO mytable (title, content, date) VALUES ('My Title', 'My Content', 'My Date')

$this->db->get_compiled_insert()
	// 该方法和 $this->db->insert() 方法一样根据你提供的数据生成一条 INSERT 语句，但是并不执行。
	$data = array(
	    'title' => 'My title',
	    'name'  => 'My Name',
	    'date'  => 'My date'
	);

	$sql = $this->db->set($data)->get_compiled_insert('mytable');
	echo $sql;
	// Produces string: INSERT INTO mytable (`title`, `name`, `date`) VALUES ('My title', 'My name', 'My date')

	// 第二个参数用于设置是否重置查询（默认情况下会重置，正如 $this->db->insert() 方法一样）:
	echo $this->db->set('title', 'My Title')->get_compiled_insert('mytable', FALSE);
	// Produces string: INSERT INTO mytable (`title`) VALUES ('My Title')
	echo $this->db->set('content', 'My Content')->get_compiled_insert();
	// Produces string: INSERT INTO mytable (`title`, `content`) VALUES ('My Title', 'My Content')
	/***这个方法不支持批量插入。*/

$this->db->insert_batch()
// 该方法根据你提供的数据生成一条 INSERT 语句并执行，它的参数是一个**数组** 或一个**对象**，下面是使用数组的例子:
	$data = array(
	    array(
	        'title' => 'My title',
	        'name' => 'My Name',
	        'date' => 'My date'
	    ),
	    array(
	        'title' => 'Another title',
	        'name' => 'Another Name',
	        'date' => 'Another date'
	    )
	);

	$this->db->insert_batch('mytable', $data);
	// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date'),
	// ('Another title', 'Another name', 'Another date')


/***********
 * 更新数据
 */
$this->db->replace()
	// 该方法用于执行一条 REPLACE 语句，REPLACE 语句根据表的**主键**和**唯一索引** 来执行，
	// 类似于标准的 DELETE + INSERT 。
	// 使用这个方法，你不用再手工去实现 select()，update()，delete() 以及 insert() 这些方
	// 法的不同组合，为你节约大量时间。
	$data = array(
	    'title' => 'My title',
	    'name'  => 'My Name',
	    'date'  => 'My date'
	);

	$this->db->replace('table', $data);
	// Executes: REPLACE INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
	// 上面的例子中，我们假设 title 字段是我们的主键，
	// 那么如果我们数据库里有一行 的 title 列的值为
	// 'My title'，这一行将会被删除并被我们的新数据
	// 所取代。
$this->db->set()
	// 该方法用于设置新增或更新的数据。
	// 该方法可以取代直接传递数据数组到 insert 或 update 方法：
	$this->db->set('name', $name);
	$this->db->insert('mytable');  // Produces: INSERT INTO mytable (`name`) VALUES ('{$name}')

	如果你多次调用该方法，它会正确组装出 INSERT 或 UPDATE 语句来:
	$this->db->set('name', $name);
	$this->db->set('title', $title);
	$this->db->set('status', $status);
	$this->db->insert('mytable');


// set() 方法也接受可选的第三个参数（$escape），如果设置为 FALSE，
// 数据将不会自动转义。为了说明两者之间的区别，这里有一个带转义的
// set() 方法和不带转义的例子。
	$this->db->set('field', 'field+1', FALSE);
	$this->db->where('id', 2);
	$this->db->update('mytable'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

	$this->db->set('field', 'field+1');
	$this->db->where('id', 2);
	$this->db->update('mytable'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2


// 也可以传一个关联数组作为参数:
	$array = array(
	    'name' => $name,
	    'title' => $title,
	    'status' => $status
	);

	$this->db->set($array);
	$this->db->insert('mytable');
// 或者一个对象:
	/*
	class Myclass {
	    public $title = 'My Title';
	    public $content = 'My Content';
	    public $date = 'My Date';
	}
	*/

	$object = new Myclass;
	$this->db->set($object);
	$this->db->insert('mytable');

$this->db->update()
	// 该方法根据你提供的数据生成一条 UPDATE语句并执行，
	// 它的参数是一个数组 或一个对象 ，下面是使用数组的例子:
	$data = array(
	    'title' => $title,
	    'name' => $name,
	    'date' => $date
	);

	$this->db->where('id', $id);
	$this->db->update('mytable', $data);
	// Produces:
	//
	//  UPDATE mytable
	//  SET title = '{$title}', name = '{$name}', date = '{$date}'
	//  WHERE id = $id

	// 你可以使用一个对象:
	/*
	class Myclass {
	    public $title = 'My Title';
	    public $content = 'My Content';
	    public $date = 'My Date';
	}
	*/

	$object = new Myclass;
	$this->db->where('id', $id);
	$this->db->update('mytable', $object);
	// Produces:
	//
	// UPDATE `mytable`
	// SET `title` = '{$title}', `name` = '{$name}', `date` = '{$date}'
	// WHERE id = `$id`


// 你应该注意到 $this->db->where() 方法的使用，它可以为你设置 WHERE 子句。
// 你也可以直接使用字符串形式设置 WHERE 子句
	$this->db->update('mytable', $data, "id = 4");
	// 或者使用一个数组:
	$this->db->update('mytable', $data, array('id' => $id));
	// 当执行 UPDATE 操作时，你还可以使用上面介绍的 $this->db->set() 方法

$this->db->update_batch()
	// 该方法根据你提供的数据生成一条 UPDATE 语句并执行，
	// 它的参数是一个**数组** 或一个**对象**，下面是使用数组的例子:
	$data = array(
	   array(
	      'title' => 'My title' ,
	      'name' => 'My Name 2' ,
	      'date' => 'My date 2'
	   ),
	   array(
	      'title' => 'Another title' ,
	      'name' => 'Another Name 2' ,
	      'date' => 'Another date 2'
	   )
	);

	$this->db->update_batch('mytable', $data, 'title');

	// Produces:
	// UPDATE `mytable` SET `name` = CASE
	// WHEN `title` = 'My title' THEN 'My Name 2'
	// WHEN `title` = 'Another title' THEN 'Another Name 2'
	// ELSE `name` END,
	// `date` = CASE
	// WHEN `title` = 'My title' THEN 'My date 2'
	// WHEN `title` = 'Another title' THEN 'Another date 2'
	// ELSE `date` END
	// WHERE `title` IN ('My title','Another title')
	// 第一个参数为要更新的表名，
	// 第二个参数为要更新的数据，是个二维数组，
	// 第三个 参数是 WHERE 语句的键。
/**
 * 取决于该方法的内部实现，在这个方法之后调用 affected_rows() 方法
 * 返回的结果可能会不正确。但是你可以直接使用该方法的返回值，代表了
 * 受影响的行数。
 */

$this->db->get_compiled_update()
	// 该方法和 $this->db->get_compiled_insert() 方法完全一样，
	// 除了生成的 SQL 语句是 UPDATE 而不是 INSERT。
	// 查看 $this->db->get_compiled_insert() 方法的文档获取更多信息。
		**该方法不支持批量更新


/***********************************************
 * 删除数据
 */
$this->db->delete()
	// 该方法生成 DELETE 语句并执行
	$this->db->delete('mytable', array('id' => $id));
	// Produces:
	// DELETE FROM mytable WHERE id = $id

	// 第一个参数为表名，第二个参数为 WHERE 条件。
	// 你也可以不用第二个参数， 使用 where() 或者
	//  or_where() 函数来替代它
	$this->db->where('id', $id);
	$this->db->delete('mytable');
	// Produces:
	// DELETE FROM mytable
	// WHERE id = $id



	// 如果你想要从多个表中删除数据，你也可以将由多个表名构成的数组传给 delete() 方法
	$tables = array('table1', 'table2', 'table3');
	$this->db->where('id', '5');
	$this->db->delete($tables);
// 如果你想要删除一个表中的所有数据，可以使用 truncate() 或 empty_table() 方法。


$this->db->empty_table()
	// 该方法生成 DELETE 语句并执行:
	$this->db->empty_table('mytable');
	// Produces: DELETE FROM mytable

$this->db->truncate()
	// 该方法生成 TRUNCATE 语句并执行
	$this->db->from('mytable');
	$this->db->truncate();

	// or

	$this->db->truncate('mytable');

	// Produce:
	// TRUNCATE mytable
	**如果 TRUNCATE 语句不可用，truncate() 方法将执行 "DELETE FROM table"



$this->db->get_compiled_delete()
	// 该方法和 $this->db->get_compiled_insert() 方法完全一样，
	// 除了生成的 SQL 语句是 DELETE 而不是 INSERT\


/*******
 * 链式方法
 */
// 通过将多个方法连接在一起，链式方法可以大大的简化你的语法
	$query = $this->db->select('title')
				       ->where('id', $id)
				       ->limit(10, 20)
				       ->get('mytable');

/**********************
 * 查询构造器缓存
 * 		尽管不是 "真正的" 缓存，查询构造器允许你将查询的某个特定部分保存
 * 		（或 "缓存"）起来， 以便在你的脚本执行之后重用。一般情况下，当查
 * 		询构造器的一次调用结束后，所有已存储的信息 都会被重置，以便下一次
 * 		调用。如果开启缓存，你就可以使信息避免被重置，方便你进行重用。
 */

// 缓存调用是累加的。如果你调用了两次有缓存的 select()，然后再
// 调用两次没有缓存的 select()， 这会导致 select() 被调用4次。

// 有三个可用的缓存方法方法:
$this->db->start_cache()
	// 如需开启缓存必须先调用此方法，所有支持的查询类型（见下文）都会被存储起来供以后使用。

$this->db->stop_cache()
	// 此方法用于停止缓存。

$this->db->flush_cache()
	// 此方法用于清空缓存。

	// 这里是一个使用缓存的例子:
	$this->db->start_cache();
	$this->db->select('field1');
	$this->db->stop_cache();
	$this->db->get('tablename');
	//Generates: SELECT `field1` FROM (`tablename`)

	$this->db->select('field2');
	$this->db->get('tablename');
	//Generates:  SELECT `field1`, `field2` FROM (`tablename`)

	$this->db->flush_cache();
	$this->db->select('field2');
	$this->db->get('tablename');
	//Generates:  SELECT `field2` FROM (`tablename`)