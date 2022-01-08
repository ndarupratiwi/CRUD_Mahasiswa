<?php
class Template_mahasiswa
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function views($template_mahasiswa = null, $data = null)
    {
        if ($template_mahasiswa != null) {
            $data['header'] = $this->_ci->load->view('template/header', $data, true);
            $data['sidebar'] = $this->_ci->load->view('template/sidebar', $data, true);
            $data['topbar'] = $this->_ci->load->view('template/topbar', $data, true);
            $data['konten'] = $this->_ci->load->view($template_mahasiswa, $data, TRUE);
            $data['content'] = $this->_ci->load->view('template/content', $data, true);
            $data['footer'] = $this->_ci->load->view('template/footer', $data, true);
            $data['js'] = $this->_ci->load->view('template/js', $data, true);

            echo $data['template_mahasiswa'] = $this->_ci->load->view('template/template_mahasiswa', $data, true);
        }
    }
}
