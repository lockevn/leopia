Inherit GURUCORE design paradigm of Page - Pagelet

Use jquery for frontend

Use Savant3 - PHP-template base for serverside template

Fully OOP


# Mục tiêu #
Dự án này nhằm cung cấp một prototype dễ dùng, gọn nhẹ để các bạn lập trình viên PHP dễ dàng triển khai một website


# Loại hình, khả năng #
Leopia là phần mềm miễn phí có mã nguồn mở. Giấy phép sử dụng của Leopia hiện tại là GPL v3, tuy nhiên sự lựa chọn loại giấy phép lúc khởi tạo dự án này chưa được cân nhắc kỹ càng. Chúng tôi cũng sẵn sàng thay đổi loại giấy phép để phù hợp hơn với tình hình thực tế và luật pháp.

Leopia hoàn toàn miễn phí cho các bạn sử dụng. Tuy nhiên chúng tôi cũng thấy rằng sức mạnh của phần mềm nguồn mở nằm ở khả năng ứng dụng nó, và người giúp phần mềm nguồn mở được ứng dụng rộng rãi cần có chi phí hoạt động. Chúng tôi định hướng cho các lập trình viên, nhân viên triển khai khả năng sử dụng Leopia để kiếm tiền bằng cách:
  * Tự viết thêm và thương mại hoá module cài thêm (addon) cho Leopia
  * Hỗ trợ cài đặt, cấu hình để Leopia hoạt động (đặc biệt là với các tính năng cao cấp)
  * Bổ sung các report
  * Tư vấn để ứng dụng Leopia mang lại hiệu quả tốt nhất cho doanh nghiệp
  * Thiết kế các template cho Leopia, chỉnh sửa các template cũ dễ dàng


# Kỹ thuật #
Leopia được viết bằng PHP5 nhằm tận dụng các thế mạnh của phương pháp hướng đối tượng OOP và sự linh hoạt, dễ đọc, dễ bảo trì của ngôn ngữ lập trình PHP

Leopia được thiết kế từ đầu để chạy trên cả hệ điều hành Linux (chúng tôi sẽ thử nghiệm chạy trên các phiên bản Ubuntu) lẫn Windows (sử dụng IIS, chạy FastCGI mode)

Leopia cố gắng tối đa sử dụng các module phần mềm miễn phí hoặc mã nguồn mở khác. Chúng tôi lựa chọn các module phần mềm của hãng thứ 3 dựa trên các tiêu chí ưu tiên: miễn phí, đủ mạnh, phát triển đủ lâu để tránh lỗi, hoạt động ổn định và tương thích tốt, dễ triển khai để đính kèm với Leopia. Việc ưu tiên sử dụng các module phần mềm của hãng thứ 3 nhằm cắt bỏ chi phí phát triển & kiểm thử đối với các tính năng không phải trọng tâm (của Leopia), giảm thời gian phát triển Leopia, kéo dài vòng đời phần mềm.

Vì đã hoạt động nhiều năm trong các loại hình doanh nghiệp, có nhiều năm xây dựng các hệ thống phần mềm quản lý cũng như hệ thống thông tin tích hợp trên Internet nên chúng tôi thiết kế để cho Leopia có thể tương tác một cách tốt nhất với các ứng dụng khác. Các mức tương tác có thể là:
  * API (được thiết kế và trả ra các dạng dữ liệu theo format chuẩn, XML)
  * Dữ liệu: nếu lưu ra file sẽ ở dạng YAML, XML, JSON
  * Database (Database được thiết kế nhằm đạt được: liên hệ rõ ràng mạch lạc giữa các thực thể và hiệu quả trong tốc độ truy vấn. Điều này sẽ giúp các hệ thống khác đặt cạnh, sống chung và kết nối với dữ liệu của Leopia thông suốt, tách rời, không ảnh hưởng lẫn nhau khi có thay đổi)


## Đóng góp, ý kiến, cảm ơn ##
Trong quá trình dự án phát triển, hoặc khi sử dụng nếu bạn có ý kiến đóng góp hoặc thắc mắc gì, xin hãy đọc kỹ các trang wiki ở cột bên phải. Nếu thắc mắc chưa được giải đáp xin hãy liên hệ với chúng tôi, sử dụng email, nhóm thư hoặc tạo mục mới trong tab Issues. Các thông báo lỗi hay tính năng bạn thấy thiết thực cần Leopia thêm vào cũng đưa vào tab Issues. Bạn cũng nên tìm trong các Issues có trước, có thể có ai đã đưa ra cùng ý kiến với bạn rồi và đã được giải đáp cũng như đáp ứng rồi.

Bạn cũng có thể ghé qua trang [Phản hồi](Feedback.md) để cho chúng tôi biết nhận xét của mình về Leopia. Nếu bạn đã ứng dụng thành công Leopia cho công việc của mình, hãy kể lại để giới thiệu với mọi người, chúng tôi sẽ liệt kê sản phẩm của bạn trên trang web của Leopia như một sự ghi nhận và lời quảng bá cho cả sản phẩm của bạn và Leopia.


## Tài trợ ##
Dự án Leopia tuy mới bắt đầu nhưng cũng cho thấy rất nhiều tiềm năng. Nếu bạn thích Leopia, hoặc muốn giúp đỡ, hoặc đã ứng dụng Leopia thành công và muốn cảm ơn chúng tôi thật thiết thực, bạn hãy làm các cách sau:
  * Hãy để lại lời nhắn, nhận xét của bạn tại [Phản hồi](Feedback.md)
  * Hãy đặt link tới trang web này, hãy quảng cáo cho Leopia, hãy thông báo cho bạn bè, người thân, các doanh nghiệp ... biết về Leopia để Leopia ngày càng được biết tới nhiều hơn, ứng dụng rộng hơn. Đó là mục đích chính của chúng tôi, làm nên một phần mềm tốt và phổ biến cho người Việt
  * Hãy góp ý, nhận xét, báo lỗi ... thật nhiều, để Leopia ngày càng tốt hơn
  * Nếu bạn thấy vẫn chưa hỗ trợ đủ nhiều cho chúng tôi, bạn có thể đóng góp một chút tiền cho chúng tôi. Chúng tôi sẽ rất vui nhận tài trợ của bạn, để bồi dưỡng sức khoẻ, để mua sắm trang thiết bị để cải tiến Leopia tốt hơn nữa.
    * Tiền có thể chuyển vào tài khoản số 001100126261x tại ngân hàng Ngoại Thương Việt Nam
    * Tiền có thể chuyển trực tuyến vào account Paypal xxxxxx@yahoo.com

## Lời cảm ơn nhà tài trợ ##
  * Hiện tại Leopia mới bắt đầu nên rất cần những sự trợ giúp của các bạn.
  * Xin cảm ơn những bạn developer đã đang và sẽ tham gia dự án, những bạn sử dụng Leopia và đóng góp ý kiến cho chúng tôi. Xin cảm ơn cả những doanh nghiệp đã sử dụng những dòng mã đầu tiên của Leopia (Luften Inc, Quantum Inc, SmartCom JSC)
  * Xin cảm ơn danhut, duongna đã hỗ trợ chủ yếu về tinh thần :D
  * [Danh sách đầy đủ các nhà tài trợ](Sponsor.md)

## Download mã nguồn ##

  * Xem trong tab Download hoặc tab Source

## Lịch sử phát hành ##
[ChangeLog](ChangeLog.md)

  * Chuẩn bị phát hành tài liệu chuẩn bị dự án

## Liên hệ ##
[Chi tiết hơn, mời xem tại đây](Contact.md)

duongna\_at\_gurucore\_com
lockevn\_at\_gurucore\_com
[GURUCORE.com](http://gurucore.com)