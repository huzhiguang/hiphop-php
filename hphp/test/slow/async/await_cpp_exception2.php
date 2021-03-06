<?hh

class ExitOnDestruct {
  private function __destruct() {
    echo "exiting...\n";
    exit(1);
  }
}

class DoubleDecRef {
  private function __destruct() {
    echo "decref\n";
  }
}

async function block() {
  await RescheduleWaitHandle::create(0, 0);
}

function foo() {
  static $wh = null;
  return $wh = $wh ?: block();
}

register_postsend_function(function() {
  echo "postsend start\n";
  foo()->join();
  echo "postsend end\n";
});

async function evil($local) {
  $dep = foo();
  new ExitOnDestruct();
  await $dep;
}

evil(new DoubleDecRef())->join();
