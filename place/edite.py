import os

def update_content_in_php_files(directory):
    patterns = {
        '''$host = 'localhost';
$username = 'travelsl_db';
$password = '(P@ssw0rd)';
$dbname = 'travelsl_db';''' : '''$host = 'localhost';
$username = 'u700828528_travelsl_db';
$password = '(P@ssw0rd)***';
$dbname = 'u700828528_localhost';'''
    }
    
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith('.php'):
                file_path = os.path.join(root, file)
                with open(file_path, 'r', encoding='utf-8') as file:
                    file_contents = file.read()
                
                for old, new in patterns.items():
                    file_contents = file_contents.replace(old, new)
                
                with open(file_path, 'w', encoding='utf-8') as file:
                    file.write(file_contents)
                print(f'Content updated in: {file_path}')

# Use the current directory where this script is located
directory = os.path.dirname(os.path.realpath(__file__))

update_content_in_php_files(directory)
