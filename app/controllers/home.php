<?php
/**
 * The default home controller, called when no controller/method has been passed
 * to the application.
 */
class Home extends Controller
{
    /**
     * The default controller method.
     *
     * @return void
     */
    public function index($name = 'alex', $mood = 'normal')
    {
        $user = $this->model('User');
        $user->name = $name;
        $this->view('home/index', [
            'name' => $user->name,
            'mood' => $mood,
            'age' => 55
        ]);
    }
}
?>
