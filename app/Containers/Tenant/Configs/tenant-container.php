<?php

return [

  /*
    |--------------------------------------------------------------------------
   ", "Multi-Tenancy Enables
    |--------------------------------------------------------------------------
    |
   ", "We may want to exclude few tables to use tenant_id
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
   ", "Ignore tables list
    |--------------------------------------------------------------------------
    |
   ", "We may want to exclude few tables to use tenant_id
   ", "- It is required to skip these tables in migration, while adding tenant_id column
   ", "- It is required to skip tenant_id global check, while quering on these tables
   ", "- It is required to skip tenant_id column value set, while creating record on these tables
    |
    */

    'ignore_tables' => [
      "failed_jobs",
      "migrations",

      "oauth_access_tokens",
      "oauth_auth_codes",
      "oauth_clients",
      "oauth_personal_access_clients",
      "oauth_refresh_tokens",
      "password_resets",

      "roles",
      "permissions",
      "role_has_permissions",
      "model_has_permissions",
      "model_has_roles",

      "tenants",
    ]



];