To run playbooks:

  echo '(secret vault password)' > .vault-password

  ansible-playbook -i inventories/inventory -u root all.yml --vault-password-file=.vault-password

