# 解决mysql默认字符过长问题
use Illuminate\Support\Facades\Schema; 
Schema::defaultStringLength(191);

# 命令生成ORM模型
php artisan make:model App\Models\Customer

# 命令生成CURL
php artisan admin:make CustomerController --model=App\Models\Customer

