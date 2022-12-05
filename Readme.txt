Part 1 โครงสร้างไฟล์ในโฟลเดอร์โปรเจ็กต์
	   - Folder doc/
			- File Presentation จัดเก็บสไลด์ในการนำเสนอ(PDF)
			- File รูปเล่ม จัดเก็บรายงาน (docx และ PDF)
	   - Folder source/ จัดเก็บ File ที่เกี่ยวข้องในโครงงานทั้งหมด
			-EazySite.rar เป็น File ที่เก็บ code ทั้งหมดของโปรเจ็ค
			-แตกไฟล์แล้วจะได้ File ทั้งหมดของโปรเจคออกมา โดยภายในไฟล์จะมี
                File PHP,Folder BlogPage(เก็บ Blog ของ website),Folder assets(เก็บ File ภาพ,css,javascript,vendor)
Part 2 การติดตั้งโครงงาน
	- ขั้นตอนที่ 1    ทำการดาวน์โหลดและติดตั้งโปรแกรม XAMPP
	- ขั้นตอนที่ 2    ทำการแตกไฟล์ EazySite.rar ที่อยู่ในโฟลเดอร์ source และนำโฟลเดอร์และไฟล์ต่างๆที่ได้จากการแตกไฟล์ ไปไว้ที่โฟลเดอร์
                    htdocs ใน โฟลเดอร์ xampp
	- ขั้นตอนที่ 3 	  เปิด XAMPP ขึ้นมาและ Start ตัว Apache และ MySQL
	- ขั้นตอนที่ 4    ไปที่ https://localhost/phpmyadmin
	- ขั้นตอนที่ 5    นำไฟล์ที่มีชื่อว่า pj.sql จาก Folder sql/  ไป import ลงใน phpmyadmin
	- ขั้นตอนที่ 6    ไปที่ https://localhost/EazySite/index.php เพื่อไปที่หน้าหลัก

Part 3  ลิ้งค์ไปยัง Youtube การนำเสนอของโปรเจ็กต์
	- https://www.youtube.com/watch?v=ztSGNlBbcZs