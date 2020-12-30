<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
session_start();
include 'koneksi/koneksi.php';
include 'item.php';

if (isset($_GET['id']) && !isset($_POST['update'])) {
	$sql = "SELECT * FROM tb_produk WHERE id_produk=".$_GET['id'];
	$result = mysqli_query($koneksi, $sql);
	$produk = mysqli_fetch_object($result);
	$item = new Item();
	$item->id = $produk->id_produk;
	$item->foto_produk = $produk->foto_produk;
	$item->kategori = $produk->kategori;
	$item->beratisi = $produk->beratisi_produk;
	$item->harga = $produk->harga_produk; 
	$iteminstock = $produk->stok;
	$item->stok = 1;

	//cek produk di keranjang
	$index = -1;
	$keranjang = unserialize(serialize($_SESSION['keranjang']));

	for ($i=0; $i<count($cart);$i++) 
		if ($cart[$i]->id == $_GET['id_produk']) {
			$index = $i;
			break;
		}
		if ($index == -1) 
			$_SESSION['keranjang'][] = $item;
		else {
			if (($keranjang[$index]->stok) < $iteminstock) 
				$keranjang[$index]->stok ++;
			$_SESSION['keranjang'] = $keranjang;
		}

	}

	//hapus produk di keranjang
	if (isset($_GET['index']) && !isset($_POST['update'])) {
		$keranjang = unserialize(serialize($_SESSION['keranjang']));
		unset($keranjang[$_GET['index']]);
		$keranjang = array_values($keranjang);
		$_SESSION['keranjang'] = $keranjang;
	}

	//update quantitu di keranjnag
	if (isset($_POST['update'])) {
		$arrQuantity = $_POST['stok'];
		$keranjang = unserialize(serialize($_SESSION['keranjang']));
		for ($i=0; $i<count($keranjang); $i++){
			$keranjang[$i]->stok = $arrQuantity[$i]; 
		}
		$_SESSION['keranjang'] = $keranjang;
	}

?>
<h2> Items in your cart: </h2> 
<form method="POST">
<table id="t01">
<tr>
	<th>Option</th>
	<th>foto_produk</th>
	<th>kategori</th>
	<th>beratisi_produk</th>
	<th>harga_produk</th>
	<th>stok</th>

	<th>Total</th>
</tr>
<?php
	$keranjang = unserialize(serialize($_SESSION['keranjang']));
	$s = 0;
	$index = 0;
	for ($i=0; $i<count($keranjang); $i++) { 
		$s += $keranjang[$i]->harga * $keranjang[$i]->stok;
	?>
		<tr>
			<td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('anda yakin')">Delete</a></td>
			<td><?php echo $keranjang[$i]->id ?></td>

			<td><img src="foto_produk/<?php echo $keranjang[$i]->foto_produk; ?>" height='30px' width='30px'></td>
			<td><?php echo $keranjang[$i]->kategori ?></td>
			<td><?php echo $keranjang[$i]->beratisi ?></td>
			<td><?php echo $keranjang[$i]->harga ?></td>
			<td><input type="number" min="1" name="stok[]" value="<?php echo $keranjang[$i]->stok; ?>"></td>
			<td><?php echo $keranjang[$i]->harga * $keranjang[$i]->stok; ?></td>
		</tr>
		<?php
		$index++;
		} ?>

		<tr>
		<td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <input id="saveimg" type="image" src="" name="update" alt="Save Button">
         <input type="hidden" name="update">
 		</td>
 		<td> Rp.<?php echo $s; ?> </td>
		</tr>
	</table>
</form>
<br>
<a href="index3_cart.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</body>
</html>