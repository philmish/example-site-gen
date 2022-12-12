# An project template

## Setup

1. Install docker and docker compose
2. Run "docker compose up" to start the application
3. The frontend is available under localhost:8080

## Demo

This is a quick-and-dirty POC for a basic Webapplication which
generates static HTML pages from templates and db data.

After starting your stack you can:

- vist "localhost:8080/" for a static home view
- visit "localhost:8080/list" for a view of a page generated from a get-all query (simulated with array)
- visit "localhost:8080/list?id=a" for a view of a single item from retrieved from the DbConnector
