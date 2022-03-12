<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function home() {
		return view('index');
	}
	public function about() {
		return view('about');
	}
	public function profile() {
		return view('profile');
	}
	public function settings() {
		return view('settings');
	}
	public function products($category, $orientation = "horizontal") {
		switch ($category) {
			case "games":
				$products = [
					[//1
						"name"  => "Elden Ring",
						"dev"   => "FromSoftware",
						"pub"   => "FromSoftware",
						"link"  => "https://store.steampowered.com/app/1245620/ELDEN_RING/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/13e02498b2ae3df0c9078db2f9eb9b2d.webp",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/e8a2134c849b73bd279caa9f87c94c40.png",
						"best"  => "49.99"
					],[//2
						"name"  => "Cyberpunk 2077",
						"dev"   => "CD PROJEKT RED",
						"pub"   => "CD PROJEKT RED",
						"link"  => "https://www.gog.com/en/game/cyberpunk_2077",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/561adbb4e6094bef3c29e38ceb6bd929.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/32c3d0cdaa575bc25350c7fce4ad91e2.jpg",
						"best"  => "49.99"
					],[//3
						"name"  => "Stellaris",
						"dev"   => "Paradox",
						"pub"   => "Paradox",
						"link"  => "https://store.steampowered.com/app/281990/Stellaris/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/b2d07452cf118e98723c0dae380ea76b.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/0f31278390b7703f66815f634998d6ea.png",
						"best"  => "49.99"
					],[//4
						"name"  => "No Mans Sky",
						"dev"   => "Hello Games",
						"pub"   => "Hello Games",
						"link"  => "https://store.steampowered.com/app/275850/No_Mans_Sky/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/c8d77146931324f4001237a93fe4ba8c.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/f4c08424dfb92c8e97f05905215fba86.png",
						"best"  => "39.99"
					],[//5
						"name"  => "Humankind",
						"dev"   => "Amplitude",
						"pub"   => "Sega",
						"link"  => "https://store.steampowered.com/app/1124300/HUMANKIND/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/dc1abec14aa6e50efb6f3cdfbb45c2a0.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/7f91ef16b2f9174fb249618802b860ea.png",
						"best"  => "14.99"
					],[//6
						"name"  => "Satisfactory",
						"dev"   => "Coffee Stain",
						"pub"   => "Coffee Stain",
						"link"  => "https://store.steampowered.com/app/526870/Satisfactory/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/43a34043a4ff0d83060d0c1c4bbf7f6f.jpg",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/0f6df0b7e985e2877adf1f36f8d3bbf3.png",
						"best"  => "15.99"
					],[//7
						"name"  => "Everspace",
						"dev"   => "Rockfish",
						"pub"   => "Rockfish",
						"link"  => "https://store.steampowered.com/app/1128920/EVERSPACE_2/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/2e4107ccdf29b2ba754931d865b97d4b.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/b453b5a7a737a3fc489fa11aaac1618b.png",
						"best"  => "14.99"
					],[//8
						"name"  => "Astroneer",
						"dev"   => "System Era Softworks",
						"pub"   => "System Era Softworks",
						"link"  => "https://store.steampowered.com/app/361420/ASTRONEER/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/4af0e3f08d279f5e0fa660bc86b70c78.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/01d5fe9395cb06bd35475b88f6647d32.png",
						"best"  => "9.99"
					],[//9
						"name"  => "Sid Meier's Civilisation 6",
						"dev"   => "Firaxis Games",
						"pub"   => "2K",
						"link"  => "https://store.steampowered.com/app/289070/Sid_Meiers_Civilization_VI/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/938f7afcfd8745c92c3010b5bf4ba75d.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/c9ee6a825655d889ae6a84bde2802bc2.png",
						"best"  => "24.99"
					],[//10
						"name"  => "DOOM Eternal",
						"dev"   => "Bethesda Softworks",
						"pub"   => "Bethesda Softworks",
						"link"  => "https://store.steampowered.com/app/782330/DOOM_Eternal/",
						"img-hori"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/7a37e5ef930630650790791fe509e8dc.png",
						"img-vert"   => "https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/ecdcece693ca678ef57153c813cdd5b7.png",
						"best"  => "19.99"
					]
				];
				
				
				return view('products', [
					"category"    	=> $category,
					"orientation"   => $orientation,
					"products" 		=> $products
				]);
				break;
			case "components":
				$products = [
					[//1
						"name"  => "NVIDIA GeForce RTX 3090 FE",
						"type"  => "gpu",
						"specs"   => [
							"CUDA cores: 10496",
							"boost clock: 1.7GHz",
							"memory: 24GB"
						],
						"link"  => "#",
						"img-hori"   => "https://assets.nvidia.partners/images/png/nvidia-geforce-rtx-3090.png",
						"img-vert"   => "https://assets.nvidia.partners/images/png/nvidia-geforce-rtx-3090.png",
						"best"  => "2100.00"
					],
					[//2
						"name"  => "NZXT Kraken Z73 AIO Cooler",
						"type"  => "water cooler",
						"specs"   => [
							"pump speed: 10496"
						],
						"link"  => "#",
						"img-hori"   => "https://m.media-amazon.com/images/I/71xtDBbXZyL._AC_SX679_.jpg",
						"img-vert"   => "https://m.media-amazon.com/images/I/71xtDBbXZyL._AC_SX679_.jpg",
						"best"  => "249.99"
					],
					[//3
						"name"  => "Intel Core i9-11900K Desktop Processor",
						"type"  => "cpu",
						"specs"   => [
							"cores: 8",
							"threads: 16",
							"max clock speed: 5.30Ghz"
						],
						"link"  => "#",
						"img-hori"   => "https://m.media-amazon.com/images/I/41jGx-EgaJL._AC_.jpg",
						"img-vert"   => "https://m.media-amazon.com/images/I/41jGx-EgaJL._AC_.jpg",
						"best"  => "545.00"
					],
					[//4
						"name"  => "G.SKILL Trident Z RGB Series",
						"type"  => "ram",
						"specs"   => [
							"capacity: 64GB",
							"type: 288-pin DDR4 SDRAM",
							"speed: 3600"
						],
						"link"  => "#",
						"img-hori"   => "https://www.gskill.com/_upload/images/1809101101280.png",
						"img-vert"   => "https://www.gskill.com/_upload/images/1809101101280.png",
						"best"  => "112.99"
					],
					[//5
						"name"  => "Samsung 980 1 TB Solid State Drive",
						"type"  => "SSD",
						"specs"   => [
							"capacity: 1TB",
							"read speed: 7GB/s",
							"write speed: 5.1GB/s"
						],
						"link"  => "#",
						"img-hori"   => "https://images.samsung.com/is/image/samsung/p6pim/uk/mz-v8v1t0bw/gallery/uk-980-nvme-m2-ssd-mz-v8v1t0bw-399698720?$2052_1641_PNG$",
						"img-vert"   => "https://images.samsung.com/is/image/samsung/p6pim/uk/mz-v8v1t0bw/gallery/uk-980-nvme-m2-ssd-mz-v8v1t0bw-399698720?$2052_1641_PNG$",
						"best"  => "110.00"
					]
				];

				
				return view('products', [
					"category"    	=> $category,
					"orientation"   => $orientation,
					"products" 		=> $products
				]);
				break;
			case "consoles":
				$products = [
					[//1
						"name"  => "PlayStation 5 Disc",
						"brand"   => "Sony",
						"desc"   => "Disk Edition",
						"link"  => "https://www.playstation.com/en-gb/ps5/",
						"img-hori"   => "https://m.media-amazon.com/images/I/61W3QAWieSL._AC_SX679_.jpg",
						"img-vert"   => "https://m.media-amazon.com/images/I/61W3QAWieSL._AC_SX679_.jpg",
						"best"  => "449.99"
					],[//1
						"name"  => "PlayStation 5 Digital",
						"brand"   => "Sony",
						"desc"   => "Digital Edition",
						"link"  => "https://www.playstation.com/en-gb/ps5/",
						"img-hori"   => "https://cdn.media.amplience.net/i/currysprod/10205198?\$l-large$&fmt=auto",
						"img-vert"   => "https://cdn.media.amplience.net/i/currysprod/10205198?\$l-large$&fmt=auto",
						"best"  => "359.99"
					],[//1
						"name"  => "Xbox Series X",
						"brand"   => "Microsoft",
						"desc"   => "Best Version",
						"link"  => "https://www.xbox.com/en-GB/consoles/xbox-series-x",
						"img-hori"   => "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRG4rakR2orK4xT8SMQJ6POoY3VlzEPH8DVZFyoT90V-fFCm7r2ff8lkwiKTUZm6VOwkucN6ytYuIVQTtKFN1Rr_HYsveznGL1CdL6sg_ZQljLO0zcK0Pxcgg&usqp=CAE",
						"img-vert"   => "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRG4rakR2orK4xT8SMQJ6POoY3VlzEPH8DVZFyoT90V-fFCm7r2ff8lkwiKTUZm6VOwkucN6ytYuIVQTtKFN1Rr_HYsveznGL1CdL6sg_ZQljLO0zcK0Pxcgg&usqp=CAE",
						"best"  => "449.99"
					],[//1
						"name"  => "Xbox Series S",
						"brand"   => "Microsoft",
						"desc"   => "Budget Version",
						"link"  => "https://www.xbox.com/en-GB/consoles/xbox-series-s",
						"img-hori"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQtDAGQNPaZgV2WJ6Dpvf6pTNIqKvJx06fIyI3TQGBPeK2if9YC9T1I3i5QLT5zU4staiqhx-tIzalWgzt3za3X4XSUWczemb7hIiee9mmaH8xO-md1lWks2w&usqp=CAE",
						"img-vert"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQtDAGQNPaZgV2WJ6Dpvf6pTNIqKvJx06fIyI3TQGBPeK2if9YC9T1I3i5QLT5zU4staiqhx-tIzalWgzt3za3X4XSUWczemb7hIiee9mmaH8xO-md1lWks2w&usqp=CAE",
						"best"  => "249.99"
					],[//1
						"name"  => "Nintendo Switch",
						"brand"   => "Nintendo",
						"desc"   => "OLED Edition",
						"link"  => "https://www.nintendo.com/switch/oled-model/",
						"img-hori"   => "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTElLMZBu8dmYV0XosxAII5Pl0vZsJR5YAS2gY8diNxBqB4triw3T5EqFenyC8ogvktIVkLqZBa0eNFpCjb48vUoTmCewP0Ttu_a4m4-5E&usqp=CAE",
						"img-vert"   => "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTElLMZBu8dmYV0XosxAII5Pl0vZsJR5YAS2gY8diNxBqB4triw3T5EqFenyC8ogvktIVkLqZBa0eNFpCjb48vUoTmCewP0Ttu_a4m4-5E&usqp=CAE",
						"best"  => "309.99"
					]
				];

				
				return view('products', [
					"category"    	=> $category,
					"orientation"   => $orientation,
					"products" 		=> $products
				]);
				break;
			case "prebuilds":
				$products = [
					[//1
						"name"  => "Corsair One i300",
						"specs"   => [
							"cpu" => "i9-12900K", 
							"gpu" => "RTX 3080 Ti", 
							"ram" => "64GB DDR5"
						],
						"link"  => "#",
						"img-vert"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRNqFRWOu8h_J7f-X1z9KZI9JV4t1cct4rbBSSIw4eBZOgrkHsvN6zARnU8DHWdkgK2Mw8jnfeab0z6AyqanHA0ZVR9PwDimbCOit7ftIMt&usqp=CAE",
						"img-hori"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRNqFRWOu8h_J7f-X1z9KZI9JV4t1cct4rbBSSIw4eBZOgrkHsvN6zARnU8DHWdkgK2Mw8jnfeab0z6AyqanHA0ZVR9PwDimbCOit7ftIMt&usqp=CAE",
						"best"  => "1000"
					],
					[//2
						"name"  => "Predator Orion 3000",
						"specs"   => [
							"cpu" => "i9-12900K", 
							"gpu" => "RTX 3080 Ti", 
							"ram" => "64GB DDR5"
						],
						"link"  => "#",
						"img-vert"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT5kRfCy6guheizFEmG1j85TcnXdVqZHRL8Z6vh_4NthUW9YUPOxmlrXCfutXJS4LpRT6Yqp10au5kfq57nPTCwvMP1OR2tVtO3PJIPikeycSuk96xcOZDNBg&usqp=CAE",
						"img-hori"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT5kRfCy6guheizFEmG1j85TcnXdVqZHRL8Z6vh_4NthUW9YUPOxmlrXCfutXJS4LpRT6Yqp10au5kfq57nPTCwvMP1OR2tVtO3PJIPikeycSuk96xcOZDNBg&usqp=CAE",
						"best"  => "1000"
					],
					[//3
						"name"  => "Asus ROG GA15",
						"specs"   => [
							"cpu" => "i9-12900K", 
							"gpu" => "RTX 3080 Ti", 
							"ram" => "64GB DDR5"
						],
						"link"  => "#",
						"img-vert"   => "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQnz5dHcTZVb-Tq1OJQ4lPyDz8ACNhS_J_8-GEgRyRoKVzj8NXmT2nbh84sTV51pji3VxHqDcB_kqG3p3OoUbHCcVVXhv9pkJoEwHFMpLyuKLDTtIAyTJiH&usqp=CAE",
						"img-hori"   => "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQnz5dHcTZVb-Tq1OJQ4lPyDz8ACNhS_J_8-GEgRyRoKVzj8NXmT2nbh84sTV51pji3VxHqDcB_kqG3p3OoUbHCcVVXhv9pkJoEwHFMpLyuKLDTtIAyTJiH&usqp=CAE",
						"best"  => "1000"
					],
					[//4
						"name"  => "Alienware R12",
						"specs"   => [
							"cpu" => "i9-12900K", 
							"gpu" => "RTX 3080 Ti", 
							"ram" => "64GB DDR5"
						],
						"link"  => "#",
						"img-vert"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR6YagCY8eQufe6ZjLGl78TCdXtAlAr1KKUxKyNJdz4vpthG3LX_m7YDPF3nAtG0P6Ux72vvExyHesqiS_iibl_KzpHOud6kKLEo8BmREHXev_m0oC-u6BCsg&usqp=CAE",
						"img-hori"   => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR6YagCY8eQufe6ZjLGl78TCdXtAlAr1KKUxKyNJdz4vpthG3LX_m7YDPF3nAtG0P6Ux72vvExyHesqiS_iibl_KzpHOud6kKLEo8BmREHXev_m0oC-u6BCsg&usqp=CAE",
						"best"  => "1000"
					],
					[//5
						"name"  => "HP Omen 30L",
						"specs"   => [
							"cpu" => "i9-12900K", 
							"gpu" => "RTX 3080 Ti", 
							"ram" => "64GB DDR5"
						],
						"link"  => "#",
						"img-vert"   => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5WIl4yJWQQHCRzNdrdjTcYoBkaMvlZGB1uKxabgyB41eacKWBwYpR4ANiV6-SDCS3GbfY4uJmL4zSkyr3Aki9xDy_KWUsCO72s-dtpoU&usqp=CAE",
						"img-hori"   => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ5WIl4yJWQQHCRzNdrdjTcYoBkaMvlZGB1uKxabgyB41eacKWBwYpR4ANiV6-SDCS3GbfY4uJmL4zSkyr3Aki9xDy_KWUsCO72s-dtpoU&usqp=CAE",
						"best"  => "1000"
					]
				];
				
				
				return view('products', [
					"category"    	=> $category,
					"orientation"   => $orientation,
					"products" 		=> $products
				]);
				break;
			default:
				$category = "no dont do that";
				
				return view('products', [
					"category"    	=> $category,
					"orientation"   => $orientation,
					"products" 		=> Null
				]);
				break;
		}
	}

	public function saved() {
		$products = [
			[
				"title" => "ASUS TUF Gaming GeForce RTX™ 3080 Ti OC Edition 12GB GDDR6X",
				"link"  => "https://www.amazon.co.uk/ASUS-GeForce-buffed-up-chart-topping-performance/dp/B095YF4L9W/ref=sr_1_8?crid=19PWXQ3S0M5BV&keywords=3080&qid=1646723576&sprefix=3080%2Caps%2C85&sr=8-8",
				"img"   => "https://m.media-amazon.com/images/I/71F-iS7SfcS._AC_SX679_.jpg",
				"best"  => "1800",
				"avg"   => "1900"
			],[
				"title" => "AMD Ryzen Threadripper 3990X",
				"link"  => "https://www.amazon.co.uk/DANIPEW-AMD-Ryzen-Threadripper-3990X/dp/B0815SBQ9W/ref=sr_1_fkmr1_2?keywords=AMD%20RYZEN%20THREADRIPPER%203990X&qid=1581093524&sr=8-2-fkmr1%0D%0A",
				"img"   => "https://m.media-amazon.com/images/I/711VabzLQ2L._AC_SX679_.jpg",
				"best"  => "3900",
				"avg"   => "4000"
			],[
				"title" => "Elden Ring",
				"link"  => "https://store.steampowered.com/app/1245620/ELDEN_RING/",
				"img"   => "https://cdn.akamai.steamstatic.com/steam/apps/1245620/header.jpg?t=1646406355",
				"best"  => "40",
				"avg"   => "50"
			],
		];

		$total = array_sum(array_column($products, 'best'));

		return view('saved', [
			"products" => $products,
			"total"	   => $total
		]);
	}
}
