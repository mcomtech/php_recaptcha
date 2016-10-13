# php_recaptcha
การใช้งาน recaptcha ของ google อย่างง่ายๆ

ก่อนจะไปใช้งานต้องมีการสร้าง recaptcha ใน เว็บของ recaptcha ก่อน 

https://www.google.com/recaptcha/admin

หลังจากสร้างแล้วจะได้ secret และ site-key 

แก้ไขไฟล์ index.php แก้ไข site-key ให้ตรงกับของตัวเอง

แก้ไขไฟล์ recaptcha.php แก้ไข secret ให้ตรงกับของตัวเอง 

ในหน้า admin
เพิ่ม Domain ที่ใช้ในการทดสอบ หากใช้ localhost ให้ใส่ 

- localhost

ในรายการได้แล้วจากนั้นกด save 
