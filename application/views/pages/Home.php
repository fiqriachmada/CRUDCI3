<div class="container">
	<div class="table-responsive mt-4">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$id = 1;
				foreach ($tamu as $row) :
				?>
					<tr>
						<th scope="row"><?= $id++ ?></th>
						<td><?= $row->nama ?></td>
						<td><?= $row->alamat ?></td>

						<td>
							<a class="btn btn-info" href="<?= base_url('index.php/App/edit/') . $row->id ?>">Edit</a> |
							<a class="btn btn-danger" href="<?= base_url('index.php/App/delete/') . $row->id ?>">Hapus</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>