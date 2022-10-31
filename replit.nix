{ pkgs }: {
	deps = [
		pkgs.sudo
  pkgs.mysql80
  pkgs.twelf
  pkgs.php80
        pkgs.php80Packages.composer
	];
}