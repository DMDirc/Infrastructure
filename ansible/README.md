To run playbooks:

  echo '(secret vault password)' > .vault-password

  ansible-playbook -i inventories/inventory -u root all.yml --vault-password-file=.vault-password


To edit encrypted vars:

  ansible-vault edit --vault-password-file=.vault-password vars/private/circle-private.yml

