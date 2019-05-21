<?php 
class Derramamento {
	
	public function exibeArrayOrigin($array){
		for($i = 0; $i < count($array); $i++){
			echo $array[$i].',';
		}
	}

	public function getFilhos($n1,$n2){
		
		$array = array();
		
		$n = count($n1);
		if($n2 != null && count($n1) < 2){
			$indice = 0;
			for($i = 0; $i < count($n2); $i++){
				if($i==0){$array['n1'][0]=$n1[$i];}
				$array['n1'][$i+1] = $n2[$i];
				//unset($n1[$i]);
				//unset($n2[$i]);
				if(count($array['n1']) == 2){
					for($j = $n === 0 ? 0 : 1; $j <= count($n2); $j++){
						if(isset($n2[$j]))
							$array['n2'][$indice]=$n2[$j];
						$indice++;
					}
					break;		
				}
			}
		}else{
			
			$indice = 0;
			for($i = 0; $i < count($n1); $i++){	
				$array['n1'][$i] = $n1[$i];
				//unset($n1[$i]);
				if($i==1){
					
					for($j = count($array['n1']); $j < count($n1); $j++){
						//echo 'n1:'.$n1[$j].'indice for:'.$j.'<br>';
						$array['n2'][$indice]=$n1[$j];
						$indice++;
					}
					
					for($k = 0; $k < count($n2); $k++){
						//echo 'n2:'.$n2[$k].'indice for:'.$k.'<br>';
						if(isset($n2[$k]))
							$array['n2'][$indice]=$n2[$k];
						$indice++;
					}
					break;
				}
			}
		}
		return $array;
	}
}