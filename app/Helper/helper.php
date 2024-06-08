<?php

function callAdminStaticResources($data)
{
    return asset('static_asset/admin/theme_one/' . $data);
}

function callFrontendStaticResources($data)
{
    return asset('static_asset/frontend/theme_one/' . $data);
}
