# StandardPHPConfig
This PHP Config is a standard easy to edit config script for mysql databases

# How to use

1. Change the user credentials for database connection
2. Simply include or require the config file
3. Check if db connection works.

Sample:

include 'config.php';
if(!$con)
{
  echo "Con Failed";
}
else
{
  echo "Con Success";
}
