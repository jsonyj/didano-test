<?php

class AppView extends BraveView {

    function layout($tpl = null) {
        $time = date('Y年n月d日');
        $this->assign('time', $time);

        $loginUser = $this->getSession(SESSION_USER);
        $this->assign('loginUser', $loginUser);
        
        $layout['main'] = $this->fetch($tpl);
        $this->autoAssign($layout);
        $this->display('Layout.default');
    }
    
    function layoutWidget($tpl, $data) {
        $this->autoAssign($data);
        $this->display($tpl);
    }
    
    function layoutThickbox($tpl = null) {
        $layout['main'] = $this->fetch($tpl);
        $this->autoAssign($layout);
        $this->display('Layout.thickbox');
    }
    
    function layoutWindow($tpl = null) {
        $layout['main'] = $this->fetch($tpl);
        $this->autoAssign($layout);
        $this->display('Layout.window');
    }
    
    function layoutLogin($tpl = null) {
        $layout['main'] = $this->fetch($tpl);
        $this->autoAssign($layout);
        $this->display('Layout.login');
    }
}

?>
