import os

def update_content_in_php_files(directory):
    patterns = {
        '''<!-- Review Form -->

<form id="feedback" action="" method="post">
    <br>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="name" placeholder="Enter Your Name" class="form-control" type="text" style="height: 50px;">
                <?php if (!empty($nameError)) echo '<div style="color:red;">'.$nameError.'</div>'; ?>      
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="email" type="email" class="form-control" placeholder="Enter Your Email" style="height: 50px;">
                <?php if (!empty($emailError)) echo '<div style="color:red;">'.$emailError.'</div>'; ?>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <select class="form-control" name="rating"style="height: 50px;">
                    <option value="">Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <?php if (!empty($ratingError)) echo '<div style="color:red;">'.$ratingError.'</div>'; ?>

            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" name="review" rows="3"placeholder="Write Your Review " style="height: 100px;"></textarea>
                <?php if (!empty($reviewError)) echo '<div style="color:red;">'.$reviewError.'</div>'; ?>      </div>
        </div>
    </div>
    <br>

    <div class="form-group" style="text-align: center;">
        <button type="submit" class="btn btn-primary" style="display: block; margin-left: 20px; padding-top: 10px;">Submit</button>
    </div>
</form>''' : '''<!-- Review Form -->

<form id="feedback" action="" method="post">
    <br>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="name" placeholder="Enter Your Name" class="form-control" type="text" style="height: 50px;" required>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input name="email" type="email" class="form-control" placeholder="Enter Your Email" style="height: 50px;" required>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <select class="form-control" name="rating" style="height: 50px;" required>
                    <option value="" disabled selected>Select a rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <textarea class="form-control" name="review" rows="3" placeholder="Write Your Review" style="height: 100px;" required></textarea>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group" >
        <button type="submit" class="button button_line_1 trans_200">Submit<span></span><span></span><span></span></button>
    </div>
</form>
'''
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
