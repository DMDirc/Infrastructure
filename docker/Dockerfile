FROM ubuntu:14.04
MAINTAINER DMDirc <devs-public@dmdirc.com>
ENV HOME /root
ENV TERM dumb
RUN locale-gen en_US.UTF-8
RUN update-locale LANG=en_US.UTF-8
RUN printf "%s\n%s" "8.8.8.8" "8.8.4.4" >> /etc/resolv.conf
RUN echo "deb http://ppa.launchpad.net/ansible/ansible/ubuntu trusty main" >> /etc/apt/sources.list.d/ansible.list && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 7BB9C367
RUN apt-get update && apt-get install -y python \
                      python-yaml \
                      python-jinja2 \
                      ansible
WORKDIR /opt/ansible
ENTRYPOINT ["/sbin/my_init", "--"]
