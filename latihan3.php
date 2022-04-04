<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 3</title>
</head>
<body>
	<?php
		$barang = [
			[
				'nota' => '',
				'kode' => 'B-001',
				'nama' => 'Buku',
				'harga' => 2000
			],
			[
				'nota' => '',
				'kode' => 'B-002',
				'nama' => 'Pensil',
				'harga' => 3000	
			],
			[
				'nota' => '',
				'kode' => 'B-003',
				'nama' => 'Penggaris',
				'harga' => 4000
			],
			[
				'nota' => '',
				'kode' => 'B-004',
				'nama' => 'Penghapus',
				'harga' => 5000
			]
		];

		?>
		<table width="50%" border="2">
			<thead>
				<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				</tr>

			</thead>
			<tbody>
				<?php
				$total_harga S= 0;
				for($i=0;$i<count($barang);$i++){
					$total_harga = $total_harga + $barang[$i]['harga'];

				echo"
				<tr>
				<td>".($i+1)."</td>
				<td>".$barang[$i]['kode']."</td>
				<td>".$barang[$i]['nama']."</td>
				<td>".$barang[$i]['harga']."</td>
				</tr>
				";
				}
				?>

		</tbody>

	</table>
	<?php
	echo "Total harga = $total_harga";
	?>


</body>
</html>