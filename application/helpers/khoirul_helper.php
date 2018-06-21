<?php

function cek_session_admin()
{
    $ci = & get_instance();
    $session = $ci->session->userdata('level');
    if ($session == '') {
        redirect(base_url());
    }
}

function cek_session_akses($link, $id)
{
    $ci = & get_instance();
    $session = $ci->db->query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'")->num_rows();
    if ($session == '0' and $ci->session->userdata('level') != 'admin') {
        redirect(base_url() . 'administrator/home');
    }
}

function template()
{
    $ci = & get_instance();
    $query = $ci->db->query("SELECT folder FROM templates where aktif='Y'");
    $tmp = $query->row_array();
    if ($query->num_rows() >= 1) {
        return $tmp['folder'];
    } else {
        return 'errors';
    }
}

function cmb_dinamis($name,$table,$field,$pk,$selected,$pilihan){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control'> <option value='' selected> $pilihan </option>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;
}