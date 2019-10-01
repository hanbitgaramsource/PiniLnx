<?php

$wgHooks['ParserPiniLnxInit'][] = 'PiniLnx::ParserPiniLnxInit';

class PiniLnx {
	public static function ParserPiniLnxInit( Parser $parser ) {
		$parser->setHook( 'lnx', [ self::class, 'renderLnxParse' ] );
	}
	
	public static function makeTable($code){
		
		$saveInput = $code;
		$code = trim($code);
		$cell = '';
		$explode = explode(PHP_EOL, $code);
		
		$cnt = count($explode);
		$color = "";
		$i = 0;
		
		for($i=0; $i<$cnt; $i++){
			if($i%2==0){
				$color = "#555";
			}else{
				$color = "#333";
			}
			if(!trim(str_replace(' ', '', $explode[$i]))){
				$explode[$i] = " ";
			}
			$cell .= '<tr style="background:'.$color.'">';
			$cell .= '<td style="padding:3px;">';
			$cell .= str_replace("\t", "<div style=\"display:inline-block; margin-left:25px;\"></div>\t",str_replace(" ", "&nbsp;",htmlspecialchars($explode[$i])));
			$cell .= "</td>";
			$cell .= "</tr>";
		}
		
		$template = '<table style="border-collapse:collapse; width:100%; background:#333; color:#fff; margin:0px; padding:0px;">
		'.$cell.'
		</table>';
		
		return $template;
	}

	public static function renderLnxParse( $input, array $args, Parser $parser, PPFrame $frame ) {
		
		$tableMaker = new PiniLnx;
		$template = $tableMaker->makeTable($input);
		
		return array('<div style="color:#fff; background:#333; padding:10px; margin:10px 0px;"><div style="border-bottom:1px solid #fff; color:#fff; font-size:12px; letter-spacing:-1px; text-align:center; padding-bottom:10px; margin-bottom:10px;"><span style="color:#d33; font-weight:bold;">피니엔진</span> LNX 소스코드</div>'.$template.'</div>', "markerType" => 'nowiki'); //, 'noparse'=>>true ];
		
		// 테이블이 싫다면, 아래 코드로 수정하면 됩니다.

		//return array('<div style="color:#fff; background:#333; padding:10px; margin:10px 0px;"><div style="border-bottom:1px solid #fff; color:#fff; font-size:12px; letter-spacing:-1px; text-align:center; padding-bottom:10px; margin-bottom:10px;"><span style="color:#d33; font-weight:bold;">피니엔진</span> LNX 소스코드</div>'.str_replace("\t", "<div style=\"display:inline-block; margin-left:25px;\"></div>\t", nl2br(htmlspecialchars(trim($input)))).'</div>', "markerType" => 'nowiki'); //, 'noparse'=>>true ];
		
	}
}
