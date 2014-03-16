1)Agregar al routing:

gema_admin:
    resource: "@GemaAdminBundle/Resources/config/routing.yml"


2)Agregar al Appkernel:

new Gema\AdminBundle\GemaAdminBundle(),

3)Agregar al securiry.yml


providers:
    ...
    admin:
        memory:
            users:
                user:  { password: user, roles: [ 'ROLE_USER' ] }
                admin: { password: admin, roles: [ 'ROLE_ADMIN' ] }   
.
.
.
firewalls:
    ....
    sin_seguridad:
        pattern:  ^/ejemplo/
        security: false

    Adminlogin:
        pattern:  ^/admin/(login|registro)$
        security: false

    Admin:
        pattern:    ^/admin/
        provider: admin
        form_login:
            check_path: admin_login_check
            login_path: admin_login
            always_use_default_target_path: true
            default_target_path: /admin/
        logout:
            path:   admin_logout
            target: /

4)Agregar los recursos css y js, usando assets

php app/console assets:install web --symlink