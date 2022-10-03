<?php
declare (strict_types=1);
namespace Lib;

class Calculation
{

    public function test_division (int $i, int $divider, string $return):string{
        $test = $i/$divider;

        if (is_float($test)){
            $return = '';
        }

        return $return;

    }

    public function do_the_did():string{

        $return = '';
        for($i=1; $i<=100; $i++){

            //COMMENT: break up tests into smaller part
            $result_3 = $this->test_division ($i, 3, 'Fizz ');
            $result_5 = $this->test_division ($i, 5, 'Buzz ');

            //COMMENT: adjust  return based on test results
            if ($result_3!=='' || $result_5!==''){
                $return .= $result_3 . $result_5;
            }

            else{
                $return .= $i;
            }

            $return .= '</br>';

        }

        return $return;

    }

}

?>
