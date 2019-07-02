# This is a private fork from a public project
See more here: https://stackoverflow.com/questions/10065526/github-how-to-make-a-fork-of-public-repository-private

This fork was created because in the original project plans wasn't working with the current version of Stripe API.

## Commands:

Setup:
```
git clone https://github.com/yurigebit/omnipay-stripe.git
cd omnipay-stripe
# make some changes
git commit
git push origin master
```

Update from public repository:
```
cd omnipay-stripe
git remote add public https://github.com/thephpleague/omnipay-stripe.git
git pull public master # Creates a merge commit
git push origin master
```
