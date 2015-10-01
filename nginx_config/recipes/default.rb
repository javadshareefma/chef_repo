cookbook_file "/etc/nginx/nginx.conf" do
  source "nginx.conf"
  action :create
end

script 'mount_fs' do
  interpreter "bash"
  cwd ::File.dirname(src_filepath)
  code <<-EOH
    mkdir -p /home/webs/
    echo "ip-172-31-10-61:webs /home/webs glusterfs defaults,_netdev 0 0" >> /etc/fstab
    mount -a
    EOH
  not_if { ::File.exists?(extract_path) }
end

service "nginx" do
  action :start
end

service "php-fpm" do
  action :start
end
