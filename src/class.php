<?php
 class lsFile {
    public $cmd;
    public $name;

    function __construct($name) {
      $this->name = $name;
      $this->cmd = "ls -al";
    }

    function __destruct() {
//        $this->execCommand();
    }

    function changeFile($name) {
        $this->name = $name;
        echo "参照するファイルを変更しました<br>";
    }

    function execCommand() {
        echo "<h4>以下のコマンドを実行します</h4>($this->cmd) {$this->name}<br><h4>結果：</h4>";
        exec("{$this->cmd} {$this->name}",$output);
        for($i = 0 ; $i < count($output); $i++){
            echo $output[$i]."<br>" ;
        }
    }
}

class execOSCommand {
    public $cmd;
    public $name;

    function __construct($cmd,$name) {
      $this->name = $name;
      $this->cmd = $cmd;
    }

    function __destruct() {
        $this->execCommand();
    }

    function changeCommand($cmd,$name) {
        $this->name = $name;
        $this->cmd = $cmd;
        echo "コマンドを変更しました<br>";
    }

    function execCommand() {
        echo "{$this->cmd} {$this->name}のコマンドを実行します<br>";
        exec("{$this->cmd} {$this->name}",$output);
        for($i = 0 ; $i < count($output); $i++){
            echo $output[$i]."<br>" ;
        }
    }
}


?>