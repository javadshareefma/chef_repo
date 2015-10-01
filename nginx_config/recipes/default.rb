cookbook_file "/etc/nginx/nginx.conf" do
  source "nginx.conf"
  action :create
end

bash "mount_fs" do
  cwd Chef::Config[:file_cache_path]
  code <<-EOH
    mkdir -p /home/webs/
    echo "ip-172-31-10-61:webs /home/webs glusterfs defaults,_netdev 0 0" >> /etc/fstab
    mount -a
  EOH
  creates "/usr/local/bin/redis-server"
end


service "nginx" do
  action :restart
end

service "php-fpm" do
  action :restart
end
