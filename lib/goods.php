<?php 

function get_goods_by_id($id){
    if(!$id){
		return null;
	}
    global $pdo;
    $result = query("
        SELECT * FROM goods
        WHERE id = '$id'
    ");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function get_goods_by_serial_number($serial_number){
    if(!$serial_number){
		return null;
	}
    global $pdo;
    $result = query("
        SELECT * FROM goods
        WHERE serial_number = '$serial_number'
    ");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function get_all_goods(){
    global $pdo;
    $result = query("
        SELECT * FROM goods
        WHERE name = '$name'
    ");

    $goods = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        goods[] = $row;
    }
    return $goods;
}

function goods_exists($serial_number){
    if(!$serial_number){
        return false;
    }
    $goods = get_goods_by_serial_number($serial_number);
    return isset($goods[$id]);
}

function goods_count(){
	global $pdo;
	$result = $pdo->query("
		SELECT *
		FROM goods
            ");

	$counter = 0;
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		$counter++;
	}
	return $counter;
}

function add_goods($goodsdata){
    $id = $goodsdata['id'];
	if(!$id){
        $id = 0;
	}
    $name = $goodsdata['name'];
    $price = $goodsdata['price'];
    $off = $goodsdata['off'];
    $serial_number = $goodsdata['serial_number'];

    global $pdo;
    if(!goods_exists($serial_number)){
        $result = $pdo->query("
            INSERT INTO goods (name, price, off, serial_number) VALUES ('$name', '$price', '$off', '$serial_number');
        ");
    }else {
        $result = $pdo->query("
            UPDATE goods
            SET name = '$name', price = '$price', off = '$off'
            WHERE serial_number = '$serial_number';
        ");
    }
    return $id;

}

function update_goods($goodsdata){
    add_goods($goodsdata);
}

function delete_goods($serial_number){
	if(!goods_exists($serial_number)){
		return;
	}
	global $pdo;
	$pdo->query("
		DELETE FROM goods
		WHERE serial_number = '$serial_number';
	");
}