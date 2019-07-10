<?php


namespace app\traits;


trait View {
    public $twig;

    public function twig() {
        $loader = new \Twig_Loader_Filesystem('../app/views');
        $this->twig = new \Twig_Environment($loader, array(
            // 'cache' => '',
            'debug' => true 
        ));
    }

    public function functions() {

    }

    public function load() {
        $this->twig();
        $this->functions();
    }

    public function view($view, $data) {
        $this->load();
        echo $view;
        var_dump($data);
        $template = $this->twig->loadTemplate(str_replace('.', '/', $view).'.html');
        return $template->display($data);
    }

}