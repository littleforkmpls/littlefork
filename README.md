# Little Fork Website

## Local Development

1. Clone the repository
1. Switch the the `develop` branch
1. CD to the project root
1. Start Docker Desktop if it's not already running
1. Run `docker compose up -d`
1. Visit http://localhost:8888 in a browser
1. Make edits
1. Commit change to source control
1. Run `cdocker compose down`

## Production Deployment

1. Merge changes from develop branch to main branch
1. SSH to AWS Production Server
1. CD to /var/www/little-fork.com
1. git pull origin main
