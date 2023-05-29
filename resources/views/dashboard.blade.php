<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
/* Reset default styles */
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font-family: Verdana, sans-serif;
		background-color: #f2f2f2;
	}

	.container {
		max-width: 960px;
		margin: 0 auto;
		padding: 20px;
		background-color: #fff;
		border: 1px solid #ddd;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}

	header {
		text-align: center;
		margin-bottom: 20px;
	}

	nav ul {
		list-style-type: none;
		margin-bottom: 20px;
	}

	nav ul li {
		display: inline-block;
		margin-right: 10px;
	}

	nav ul li a {
		text-decoration: none;
		color: #333;
		padding: 5px 10px;
		border: 1px solid #ddd;
		border-radius: 3px;
	}

	section {
		margin-bottom: 20px;
	}

	.dashboard-info {
		margin-bottom: 20px;
	}

	.dashboard-widgets {
		display: flex;
		justify-content: space-between;
	}

	.widget {
		flex-basis: 30%;
		padding: 40px;
		background-color: white;
		border: 1px solid #ddd;
		border-radius: 5px;
		position: relative;
	}

	.widget h3 {
		margin-bottom: 10px;
		color: white;
	}

	.widget p {
		font-size: 24px;
		font-weight: bold;
		color: white;
	}

	.widget .icon {
		position: absolute;
		top: 0;
		right: 0;
		padding: 10px;
		font-size: 48px;
		color: #888;
		/*box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);  Efek bayangan */
	}

	.widget .icon i {
		display: inline-block;
		vertical-align: middle;
	}

	.widget .more-link {
		position: absolute;
		bottom: 10px;
		left: 0;
		right: 0;
		margin: auto;
		color: white;
		text-decoration: none;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-left: 10px;
	}

	.widget.akademik {
	background-color: #228B22; /* Warna untuk widget Akademik */
	}

	.widget.kemahasiswaan {
		background-color: #9932CC; /* Warna untuk widget Kemahasiswaan */
	}

	.widget.kelembagaan {
		background-color: #6495ED; /* Warna untuk widget Kelembagaan */
	}

	.widget.diktendik {
		background-color: #FF1493; /* Warna untuk widget Diktendik */
	}


	footer {
		text-align: center;
		padding-top: 20px;
		border-top: 1px solid #ddd;
	}

/* Responsive Styles */
</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>
	<section>
        <div class="dashboard-widgets">
            <div class="widget akademik" style="margin-left: 30px;">
                <h3>AKADEMIK</h3>
               
				<div class="icon">
					<i class="fas fa-database"></i>
				</div>
				<a href="akademiks" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
            <div class="widget kemahasiswaan">
                <h3>KEMAHASISWAAN</h3>
                
				<div class="icon">
					<i class="fas fa-book"></i>
				</div>
				<a href="kemahasiswaans" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
			<div class="widget kelembagaan">
                <h3>KELEMBAGAAN</h3>
				<p>{{ $dataKelembagaan }}</p>
				<div class="icon">
					<i class="fas fa-users"></i>
				</div>
				<a href="/monevs" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
            <div class="widget diktendik" style="margin-right: 30px;">
                <h3>DIKTENDIK</h3>
                
				<div class="icon">
					<i class="fas fa-users-cog"></i>
				</div>
				<a href="/diktendiks" class="more-link">
					Selengkapnya
					<i class="fas fa-arrow-circle-right"></i>
				</a>
            </div>
        </div>
    </section>
</x-app-layout>
</html>
