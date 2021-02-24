#### module2-reflection
***
# Reflection 24/2
### Nguyên tắc thiết kế CSDL
- Chính xác
- Tránh trùng lặp
- Dễ hiểu
- Chọn đúng thuộc tính và kiểu thuộc tính
- Chọn đúng mối quan hệ
### Các bước thiết kế CSDL
- Xác định yêu cầu nghiệp vụ
 > - Đây là bước đầu tiên cũng là bước quan trọng nhất. Xác định yêu cầu một cách đầy đủ, cụ thể sẽ giúp cho việc thiết kế CSDL trở lên dễ dàng hơn. Luôn đặt ra câu hỏi:
 > + CSDL sẽ được sử dụng như thế nào?
 > + Những thông tin gì cần được lưu vào CSDL?
- Xây dựng lược đồ thực thể-liên kết ER
- Xây dựng lược đồ quan hệ
- Hệ quản trị CSDL


***
# Reflection 23/2
## Sự khác nhau giữa File và CSDL
### File
- File là phần mềm để quản lý cà sắp xếp các tập tin được lưu trữ trên máy tính
- Trong file có thể có các dữ liệu dư thừa
- File Không cung cấp việc backup và restore data khi data bị mất.
- Xử lý truy xuất trong File không thật sự hiệu quả.
- Data không có tính nhất quán
- So sánh với CSDL thì File ít phức tạp hơn
- Tuy nhiên File kém bảo mật hơn so với CSDL
- Vì vậy File sẽ đỡ tốn kém hơn CSDL.
### CSDL
- Là phần mềm để quản lý database
- Trong CSDL không thể có dữ liệu dư thừa.
- Có khả năng backup và restore data.
- Xử lý truy xuất hiệu quả.
- Data có tính nhất quán.
- Bảo mật hơn.
- Chi phí cao hơn File

***

# Ngày 5/2/2021
-SPL là bộ thư viên chuẩn của PHP, nó gồm tập hợp các interface, abstract class nhằm giải quyết các bài toán phổ biên.
>Các thành phần của SPL :
>> - Predefined Constants là danh sách các hằng số :số pi, số E,...
>> - Datastructures chứa danh sách các lớp co khả năng làm việc với cấu trúc, dữ liệu khác nhau LinkList, Stack, Queue, Heaps,...
>> - Interator: Chứa các lớp cho phép có khả năng thực hiện các phép lặp để duyệt các cấu trúc khác nhau tùy vào cấu trúc dữ liệu.
>> - Danh sách các Interface
>> - Exception là danh sách điều khiển các lớp ngoại lệ
>> - File Handling cung cấp các lớp làm việc với file trong hệ thống.
>> - SPL Funtions cung cấp các hàm hỗ trợ cần thiết.
>> - Miscellaneous Classes và Interface. 
<br> <br>
> -Các loại cấu trúc dữ liệu:
> -PHP DATASTRUCTURES <br>
> - SPL là bộ thư viện chuẩn của PHP.Cung cấp nhiều cấu trúc dữ liệu tiêu chuẩn để chúng ta có thể sử dụng ngay trong ứng dụng của mình.Các dữ liệu này được phân nhóm dựa vào các hình thức triển khai của chúng cũng như căn cứ vào cách sử dụng trong thực tê.
> các cấu trúc dữ liệu trong SPL:
>> - Doubly Linked List
>> - Heaps
>> - Arrays
>> - Map
> - DoublyLinkedList:
>> - Là một danh sách liên kết đôi, các node được liên kết với nhau theo hai hướng.
>> - PHP cung cấp sẵn các lớp SplDoublyLinkedList là SplStack và SplQueue
> - HEAP là một dạng cấu trúc gần như Tree, trong đó mỗi node có giá trị lớn hơn hoặc bằng các node con của nó.
>> -PHP cung cấp sẵn các lớp thuộc Heaps bao gồm SplHeap và SplPriorityQueue.Trong SplHeap có SplMaxHeap và SplMinHeap
> - ARRAYS là cấu trúc dữ liệu trong đó lưu trữ các phần tử theo hình thức liên tiếp nhau , truy cập dựa theo chỉ số.
>> - PHP cung cấp lớp có sẵn SplFixedArray
>> - Lưu ý cấu trúc Arrays khác khái niệm mảng trong PHP.Mảng trong PHP được triển khai theo hình thức Hashtable có trật tự.
> - MAP là cấu trúc dữ liệu trong đó các phần tử được quản lý theo cặp key-value.
>> - PHP cung cấp lớp SplObjectStorage
>> - Mảng trong PHP cũng có thể coi là cấu trúc Map.Trong đó key có kiểu dữ liệu là int hoặc string.
***
***
# Reflection 4/2/2021
> - Cấu trúc dữ liệu ngăn xếp (Stack)
>> + Đặc điểm là làm cho ngăn xếp trở thành cấu trúc dữ liệu dạng LIFO. LIFO là viết tắt của Last-In-First-Out. Ở đây, phần tử được đặt vào (được chèn, được thêm vào) cuối cùng sẽ được truy cập đầu tiên.
> - Các hoạt động cơ bản trên cấu trúc dữ liệu ngăn xếp
>> + Hoạt động push(): lưu giữ một phần tử trên ngăn xếp.
>> + Hoạt động pop(): xóa một phần tử từ ngăn xếp.
>> + Hoạt động peek(): lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này.
>> + Hoạt động isFull(): kiểm tra xem ngăn xếp đã đầy hay chưa.
>> + Hoạt động isEmpty(): kiểm tra xem ngăn xếp là trống hay không.
> - Cấu trúc dữ liệu hàng đợi (Queue)
>> + Một đầu luôn luôn được sử dụng để chèn dữ liệu vào (hay còn gọi là sắp vào hàng) và đầu kia được sử dụng để xóa dữ liệu (rời hàng). Cấu trúc dữ liệu hàng đợi tuân theo phương pháp First-In-First-Out, tức là dữ liệu được nhập vào đầu tiên sẽ được truy cập đầu tiên.
> - Các hoạt động cơ bản trên cấu trúc dữ liệu hàng đợi
>> + Hoạt động enqueue(): thêm (hay lưu trữ) một phần tử vào trong hàng đợi.
>> + Hoạt động dequeue(): xóa một phần tử từ hàng đợi.
>> + Phương thức peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này.
>> + Phương thức isFull(): kiểm tra xem hàng đợi là đầy hay không.
>> + Phương thức isEmpty(): kiểm tra xem hàng đợi là trống hay hay không.
> - Cấu trúc cây (tree)
>> + Cấu trúc Tree hoạt động theo nguyên tắc phân cấp, trong đó có mối quan hệ cha-con giữa các nút (node). Node mà không có cha thì được gọi là root (nút gốc), node mà không có con thì được gọi là leaf (nút lá). Những node có chung cha thì được gọi là siblings (anh em). Khái niệm edges (cạnh) được dùng để chỉ đến đường kết nối giữa các node.
> - Thêm node vào trong Tree
>> + Đây là một cách triển khai đơn giản, theo chiến thuật "chia để trị"
>> + Tất cả những phần tử nhỏ hơn phần tử hiện tại thì chuyển sang bên trái, tất cả những phần tử lớn hơn thì chuyển sang bên phải, tất cả những phần tử trùng lặp (đã tồn tại trước đó) thì sẽ bị từ chối (không thêm vào)
Duyệt qua các phần tử của tree
>> + pre-order - duyệt node hiện tại rồi sau đó sang cây bên trái và cây bên phải
>> + in-order (đối xứng) - duyệt bên trái trước, sau đó duyệt node hiện tại, rồi duyệt node bên phải
>> + post-order - duyệt bên trái trước, sau đó bên phải, rồi duyệt node hiện tại
>> + level-order (duyệt theo bề rộng) - duyệt node hiện tại, sau đó duyệt tất cả các node anh em (siblings), rồi chuyển sang duyệt những node ở level tiếp theo

***
# Reflection 3/2/2021

> + ArrayList là dùng một mảng động (như mảng thường nhưng có thể thay đổi kích thước và các phương thức thêm) để lưu trữ phần tử.
> + LinkedList sử dụng danh sách liên kết để lưu trữ phần tử. Mỗi phần thử có thể được gọi là 1 node trong danh sách.
> + Vậy cả 2 đều dùng để lưu trữ danh sách. Giờ chúng ta cùng xem sự khác nhau của chúng nhé.

Chúng khác nhau ở những đặc điểm sau:

> + Cách lưu trữ phần tử: Định nghĩa đã nêu rõ rồi đúng không nào
ArrayList thêm và xóa phần tử chậm hơn LinkedList: Điều này khá dễ hiểu vì LinkedList chỉ cần thay đổi luồng trỏ của các node trong danh sách nên độ phức tạp là O(1) còn ArrayList phải tăng/lùi tất cả những vị trí sau vị trí muốn thêm/xóa nên độ phức tạp là O(n).
> + ArrayList truy xuất phần tử nhanh hơn LinkedList: ArrayList muốn truy xuất đến phân tử thứ mấy trong danh sách thì chỉ cần gọi vị trí đó ra là được nên mất O(1) phức tạp, còn LinkedList thi phải duyêt qua các phần tử trước đó thì mới truy xuất được đến phần tử cần lấy nên độ phức tạp là O(n)
> + ArrayList chỉ có thể hoạt động như 1 list thông thường, còn LinkedList có thể hoạt động như ArrayList, stack, queue. (stack và queue mình sẽ nói đến ở bài blog khác nhé)
> + ArrayList yêu cầu ít bộ nhớ hơn LinkedList: Vì ngoài lưu trữ giá trị thì các node trong LinkedList còn phải chứa các tham chiếu đến phần tử trước, sau của nó nữa.
***
***
# Reflection 2/2/2021
### 1. SOLID
> - S: Single responsibility principle
>> + Một class chỉ nên giữ 1 trách nhiệm duy nhất (Chỉ có thể sửa đổi class với 1 lý do duy nhất).
>> + Càng về sau class sẽ càng phình to ra. Theo đúng nguyên lý, ta phải tách class này ra làm 3 class riêng. Tuy số lượng class nhiều hơn những việc sửa chữa sẽ đơn giản hơn, class ngắn hơn nên cũng ít bug hơn.
> - O: Open/closed principle
>> + Có thể thoải mái mở rộng 1 class, nhưng không được sửa đổi bên trong class đó (open for extension but closed for modification). 
>> + Theo nguyên lý này, mỗi khi ta muốn thêm chức năng,.. cho chương trình, chúng ta nên viết class mới mở rộng class cũ ( bằng cách kế thừa hoặc sở hữu class cũ) không nên sửa đổi class cũ.
> - L: Liskov Substitution Principle
>> + Trong một chương trình, các object của class con có thể thay thế class cha mà không làm thay đổi tính đúng đắn của chương trình
>> + Hãy tưởng tượng bạn có 1 class cha tên Vịt. Các class VịtBầu, VịtXiêm có thể kế thừa class này, chương trình chạy bình thường. Tuy nhiên nếu ta viết class VịtChạyPin, cần pin mới chạy được. Khi class này kế thừa class Vịt, vì không có pin không chạy được, sẽ gây lỗi. Đó là 1 trường hợp vi phạm nguyên lý này.
> - I: Interface Segregation Principle
>> + Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể
>> + Nguyên lý này khá dễ hiểu. Hãy tưởng tượng chúng ta có 1 interface lớn, khoảng 100 methods. Việc implements sẽ khá cực khổ, ngoài ra còn có thể dư thừa vì 1 class không cần dùng hết 100 method. Khi tách interface ra thành nhiều interface nhỏ, gồm các method liên quan tới nhau, việc implement và quản lý sẽ dễ hơn.
> - D: Dependency inversion principle
>> + Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. 
   Cả 2 nên phụ thuộc vào abstraction.
>> + Interface (abstraction) không nên phụ thuộc vào chi tiết, mà ngược lại.
( Các class giao tiếp với nhau thông qua interface, 
không phải thông qua implementation.)
>> + Nguyên lý này khá lắt léo, mình sẽ lấy ví dụ thực tế. Chúng ta đều biết 2 loại đèn: đèn tròn và đèn huỳnh quang. Chúng cùng có đuôi tròn, do đó ta có thể thay thế đèn tròn bằng đèn huỳnh quanh cho nhau 1 cách dễ dàng.
>> + Ở đây, interface chính là đuôi tròn, implementation là bóng đèn tròn và bóng đèn huỳnh quang. Ta có thể swap dễ dàng giữa 2 loại bóng vì ổ điện chỉ quan tâm tới interface (đuôi tròn), không quan tâm tới implementation.

>> + Trong code cũng vậy, khi áp dụng Dependency Inverse, ta chỉ cần quan tâm tới interface. Để kết nối tới database, ta chỉ cần gọi hàm Get, Save … của Interface IDataAccess. Khi thay database, ta chỉ cần thay implementation của interface này.
***

### 2. Các cách thực hành clean code:
> - Keep It Simple
>>+ Mẹo đầu tiên và cơ bản nhất là giữ mã của bạn đơn giản và dễ đọc nhất có thể và không quá phức tạp vấn đề. Bằng cách giữ nó đơn giản, bạn có thể tạo mã chất lượng cao hơn, giải quyết vấn đề nhanh hơn, làm việc tốt hơn trong các nhóm phát triển và có một cơ sở mã linh hoạt hơn.
> - Understand Your Code
>>+ Là người mới bắt đầu, ngay cả khi bạn đang viết mã đơn giản có một câu lệnh ‘if else’ , hãy bắt đầu bằng cách nhận ra mã trên một mảnh giấy. Thuật toán và toàn bộ trình biên dịch sẽ có ý nghĩa hơn khi bạn hiểu ý tưởng đằng sau mã. Ngay cả đối với các chuyên gia, cách tốt nhất để giải quyết một vấn đề phức tạp hoặc xây dựng một thuật toán để giải quyết bất kỳ vấn đề phức tạp là phá vỡ nó thành các phần nhỏ và sau đó cố gắng xây dựng một giải pháp cho mỗi phần. clean code
> - Lắng nghe những nhận xét
>> + Khi mọi người phát triển và có kinh nghiệm làm người lập trình, họ thường quên một trong những mẹo cơ bản nhất mà họ nhận được trong những ngày đầu lập trình - để lại nhận xét. Thêm nhận xét vào mã của bạn là một mẹo mở rộng mọi ngôn ngữ lập trình. Nó làm cho việc cập nhật, gỡ rối, phân tích và các hoạt động lập trình sau khác dễ dàng và hiệu quả hơn. Hơn nữa, nếu bạn đang làm việc như một nhóm, có ý kiến trong đoạn mã làm cho nó thuận tiện cho các thành viên khác để hiểu ý tưởng của bạn về mã.
> - Không lặp lại bản thân (DRY).  
>> + Nguyên tắc DRY, được xây dựng bởi Any Hunt và Dave Thomas trong Lập trình thực dụng, đây là việc sử dụng các hàm, các lớp và các thể hiện để cho phép bạn tránh nhập lại mã lệnh đã được viết một lần. Nguyên tắc cơ bản này cho phép các nhà phát triển tránh trùng lặp để tạo ra nhiều mã sạch hơn so với lập trình viên sử dụng sự lặp lại không cần thiết.  
> - Ấn định mã của bạn
>> + Hãy tưởng tượng bạn đi đến một siêu thị và không có sự nhất quán về cách thức các mặt hàng được đặt trong khu vực. Một số sản phẩm sữa lại ở quầy quần áo, một số khác ở khu vực mỹ phẩm, và bánh mì lại được đặt cùng với rau. Clean code cũng giống việc bạn sắp xếp hàng hoá ở siêu thị hay bất kỳ nơi nào khác trong thế giới thực. Khi mã của bạn được sắp xếp gọn gàng, nó sẽ trở nên dễ đọc hơn và dễ dàng hơn trong tìm kiếm.lean code
> - Công ước đặt tên
>> + Đây là một mẹo duy trì sự xuất hiện trong mỗi bài viết về cách làm việc chính xác cho bất kỳ ngôn ngữ lập trình nào, và người ta thường quên hay bỏ bê nó. Có một quy ước đặt tên thích hợp là cực kỳ quan trọng trong một mã như các cánh cửa cho các chỉnh sửa trong tương lai và cập nhật luôn luôn mở rộng. Có các tên không liên quan hoặc mâu thuẫn với các trang, biến, chức năng hoặc mảng của bạn sẽ chỉ tạo ra rắc rối cho bạn trong tương lai. Do đó, đặt tên các yếu tố trên cơ sở những gì họ đang có và làm cho nó một thói quen để duy trì một quy ước trong suốt mã của bạn.
> - Khám phá
>> + Hãy là giáo viên của riêng bạn và cố gắng khám phá càng nhiều càng tốt. Có rất nhiều trợ giúp có sẵn trong các hình thức các khóa học trực tuyến tốt và các lập trình kinh nghiệm. Hãy nhớ rằng, không có phím tắt, bạn càng code, bạn sẽ có được nhiều hơn!
> - Sử dụng bộ não của bạn
>> + Thay vì chỉ đơn giản sao chép và dán mã từ Google hoặc bất kỳ nguồn nào khác, hãy học cách sử dụng bộ não của bạn. Sao chép mã chỉ giải quyết vấn đề tạm thời chứ không thật sự giúp bạn tăng khả năng code. Hãy sao chép những gì bạn không biết nhưng hãy cố gắng hiểu những gì mình sao chép. an codeH
> - Chạy thử
>> + Để tránh những tình huống xảy ra lỗi, công việc cuối cùng của các developer phải là kiểm tra cách trang web của bạn hiển thị trên các thiết bị khác nhau và khác nhau và thực hiện các thay đổi theo yêu cầu tương ứng. Câu nói, "Đừng phán xét một cuốn sách bằng bìa của nó," không đúng đối với các ngôn ngữ lập trình vì màn hình hiển thị của bạn trông đẹp hơn, sự đánh giá của bạn càng cao.
> - Thực hành nghệ thuật của bạn
>> + Trở thành một developer tài năng là cả một nghệ thuật. Bạn có thể học bằng cách mã hóa và khám phá  bất kỳ ngôn ngữ lập trình. Bạn không bao giờ có thể tìm hiểu nếu bạn không sẵn sàng để thực hành vì vây bắt đầu viết code ngày từ thời điểm bạn đọc một cái gì đó mới. Viết mã PHP cho một cái gì đó mà bạn thích và đừng ngại thất bại. Chỉ khi bạn thất bại, bạn mới nhận ra giá trị đích thực của thành công.
***
# Reflection 1/2/2021.
***
#### 1.Abstract Class.
> - Nó là một class có tính trừu tượng rất cao đến mức không thể tạo được các đối tượng ở lớp đó thì gọi là abstract class.
> - Bắt buộc phải chứa abstract method và có thể có method thông thường.
>> + abstract method là method chỉ có khai báo (tên và tham số đầu vào).
> - Mức truy cập các abstract method phải ở public hoặc protected để lớp kế thừa có thể định nghĩa lại.
> - Không dùng từ khóa final cho khai báo abstract class và abstract method.
***
#### 2. Interface.
> - Có thể hiểu đây là một dạng bảng thiết kế cho chức năng mà bất kỳ Class nào cũng có thể có. Một interface chứa các hành vi mà một class triển khai.
> - Interface không phải là một lớp đối tượng .
> - Tất cả các hàm trong interface đều ở dạng khai báo và không được định nghĩa (giống lớp abstract).
> - Interface không thể khởi tạo.
***
#### 3. Ưu điểm.
> - Abstract class
>> + Có thể linh động các method. giống như một class thông thường.
>> + Các class extend có thể override hoặc không override các method thường.
>
> - Interface.
>> + Có thể implements nhiều interface(tính đa hình).
>> + Xây dựng được bộ khung mẫu mà các lớp phải follow theo.
>> + Giúp quản lý tốt, nắm bắt được các chức năng phải có cho một đối tượng nào đó.
***
#### 4. Nhược điểm:
> - Abstract class:
>> + Không thể extend nhiều abstract class.
>
> - Interface:
>> + Mỗi khi định nghĩa thêm tính năng, các class impelement nó đồng lọat phải thêm tính năng đó.
***
#### 5. Tại sao lại sử dụng abstract class và interface.
> - Sử dụng abstract để tránh tình trạng khai báo nhiều lớp mà mỗi lớp có những thuộc tính và phương thức tương tự nhau.
> - Sử dụng interface để giải quyết vấn đề đa kế thừa.
> - Sử dụng abstract class và interface giúp dễ mở rộng ứng dụng cũng như bảo trì code.
***
### 6. Khi nào sử dụng.
> - Khi một nhóm đối tượng có cùng bản chất kế thừa từ một class thì sử dụng abstract class.
> - Khi một nhóm đối tượng không có cùng bản chất nhưng chúng có hành động giống nhau thì sử dụng interface.
***

### Reflection 29/01/2021
```
## Nạp chồng (Overloading): 
Việc khai báo trong một lớp có nhiều thuộc tính, 
nhiều phương thức có cùng tên nhưng với các tham số khác nhau 
(khác kiểu dữ liệu, khác số lượng tham số) gọi là khai báo chồng phương thức 
(overloading method). Khi được gọi, dựa vào tham số truyền vào, 
phương thức tương ứng sẽ được thực hiện. 
Hay ngắn gọn theo từng ý như phía dưới để các bạn dễ hiểu hơn.

Các phương thức nằm trong cùng 1 lớp , có cùng tên với nhau nhưng
 có danh sách đối số khác nhau được gọi là các phương thức nạp chồng.

Hàm tạo cũng có thể được nạp chồng.

Tùy theo ta gọi đối số thế nào mà nó sẽ gọi hàm tương ứng.

## Ghi đè (Overriding): 
Trong PHP, nếu như người lập trình tạo ra một phương thức trong lớp con có
 trùng tên, cùng tham số, cùng kiểu trả về với một phương thức đã được tạo 
 ở lớp cha thì đó được gọi là ghi đè phương thức(Method Overriding). 
 Hoặc một cách dễ hiểu hơn như sau.

Là Phương thức đã xuất hiện ở lớp cha và xuất hiện tiếp ở lớp con.

Khi đối tượng thuộc lớp con gọi phương thức thì sẽ chọn lựa và chạy 
theo phương thức trong lớp con.

Khi dùng override, lúc thực thi, nếu lớp Con không có phương thức riêng,
 phương thức của lớp Con được gọi. Nếu không có phương thức của lớp Cha sẽ được gọi.


## Final class
-Khi một class được khai báo là final thì không lớp nào có thể kế thừa nó và nó chỉ có thể khởi tạo được thôi.

Cú pháp: Khai báo final class.

final class ClassName
{
    //
}
VD: khai báo final class ConNguoi.

final class ConNguoi
{
    //
}
VD: final class không thể kế thừa.

final class ConNguoi
{
    //
}
//Sai vì không thể kế thừa final class
class NguoiLon extends ConNguoi
{

}
//Fatal error: Class NguoiLon may not inherit from final class (ConNguoi)
## Final Phương thức
-Khi chúng ta khai báo một phương thức là final thì không có một phương thức nào có thể override(ghi đè lại được).

Cú pháp: khai báo một phương thức final.

class ClassName
{
    final public function methodName()
    {
        //
    }
}
VD: khai báo lớp con người có phương thức getSoChan() là final.

class ConNguoi
{
    private $soChan = 2;

    final public function getSoChan()
    {
        return $this->soChan;
    }
}
VD: không thể override lại phương thức final.

class ConNguoi
{
    private $soChan = 2;

    final public function getSoChan()
    {
        return $this->soChan;
    }
}

//Sai vì không thể override lại final phương thức
class NguoiLon extends ConNguoi
{
    public function getSoChan()
    {

    }
}
//Fatal error: Cannot override final method ConNguoi::getSoChan()

## PHP không cho phép nhiều construct trong 1 class.
```
### Reflection 28/01/2021
```
Nên sử dụng JSON khi nào
Đó là khi bạn muốn lưu trữ dữ liệu đơn thuần dưới dạng metadata ở phía server. 
Chuỗi JSON sẽ được lưu vào database và sau đó khi cần dữ liệu thì sẽ được giải mã. 
Ví dụ với PHP, nó cung cấp các hàm liên quan đến JSON 
để mã hóa hoặc giải mã là json_encode và json_decode.

Chuỗi JSON được bao lại bởi dấu ngoặc nhọn {}
Các key, valuecủa JSON bắt buộc phải đặt trong dấu nháy kép {“}, 
nếu bạn đặt nó trong dấu nháy đơn thì đây không phải là một chuỗi JSON đúng chuẩn. 
Nếu trường hợp trong value của bạn có chứa dấu 
nháy kép " thì hãy dùng dấu (\) để đặt trước nó, ví dụ  \"json là gì\".
Nếu có nhiều dữ liệu thì dùng dấu phẩy , để ngăn cách.

public function __construct($pathFile)//đường dẫn đến file json.json
    {
        $this->pathFile = $pathFile;
    }
//đọc file json
    function readFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }
//lưu vào file json, $data là 1 mảng.
    function saveFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->pathFile, $dataJson);
    }

```
### Reflection 27/01/2021

```
1) Khái quát nội dung
Access Modifiers 	Class 		Sub Class 	World
Public 		Yes 		Yes 		Yes
Protected 		Yes 		Yes 		No
Private 		Yes 		No 		No

    public- thuộc tính hoặc phương thức có thể được truy cập từ mọi nơi. Đây là mặc định

    protected - thuộc tính hoặc phương thức có thể được truy cập trong lớp và bởi các lớp dẫn xuất từ lớp đó

    private - thuộc tính hoặc phương thức chỉ có thể được truy cập trong lớp

2) Ví dụ cụ thể

    Public:

    <?php  
		class Fruit {
			public $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // OK
        echo $fruit->getName(); // OK 
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // OK
	?>

Quyền truy cập là public, chúng ta có thể gọi ở bất kỳ vị trí nào:

    Bên ngoài gọi được bên trong Class mà không bị lỗi: echo $fruit->name;
    Tương tự Class con có thể gọi được và bên trong Class

    Protected:

    <?php  
		class Fruit {
			protected $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // Error
        echo $fruit->getName(); // OK
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // OK
	?>

Khi quyền truy cập là protected:

    Trong Class và Class con, ta có thể gọi và sử dụng
    Ở ngoài Class, khi gọi đến và hiển thị ra màn hình. Sẽ báo lỗi do quyền truy cập thiết lập không đúng.

    Private:

    <?php  
		class Fruit {
			private $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // Error
        echo $fruit->getName(); // OK
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // Error
	?>

Quyền truy cập private:

    Class con và gọi từ bên ngoài sẽ báo lỗi do quyền truy cập không khả thi
    Từ trong Class, ta vẫn gọi được bình thường. Quyền truy cập là nội bộ, ở trong hàm có thể gọi được

```
### Reflection 25/01/2021

```
## Website động và website tĩnh
Website tĩnh là loại website cơ bản mà có thể tạo ra dễ dàng. 
Bạn không cần sử dụng tới các ngôn ngữ lập trình web như Java, PHP, JSP … 
hay thiết kế cơ sở dữ liệu để tạo ra website tĩnh. Những trang web của nó 
được viết bằng mã HTML, hoặc thêm CSS, Javascript để thêm các hiệu ứng nếu muốn.

Website động là tập hợp của những trang web mà nội dung có khả năng thay đổi. 
Sự thay đổi có thể là tùy theo thời gian, tùy theo người dùng, tùy theo ngữ cảnh. 
Website động có nội dung được lấy từ cơ sở dữ liệu hoặc hệ thống quản trị nội dung (CMS). 
Do đó, khi bạn cập nhật nội dung của cơ sở dữ liệu hoặc
 CMS thì nội dung của trang web cũng thay đổi theo.
Để tạo được website động, chúng ta thường sử dụng các 
ngôn ngữ lập trình phía server (server-side), như Java, PHP, Python, C#, v.v...
Website thường được đặt (hosting) trên một máy chủ dịch vụ web (Web Server).
Website động sử dụng kết hợp ngôn ngữ lập trình 
phía máy khách (Client), máy chủ (Server) để tạo ra nội dung động.

## LAMP

    Linux: Một họ các hệ điều hành (tương tự như Windows mà chúng ta thường thấy) mã nguồn mở (FOSS),
     thường được sử dụng để cài đặt cho các máy chủ trong các doanh nghiệp. 
     Gọi Linux là một "họ" là bởi vì có rất nhiều hệ điều hành Linux (bản phân phối), có thể kể đến như 
     Redhat, Fedora, Debian, Ubuntu, CentOS, ... Mỗi bản phân phối Linux này có những đặc điểm riêng,
      thế mạnh riêng và hướng đến đối tượng sử dụng riêng.

    Apache: Phần mềm máy chủ web (Web Server) được sử dụng rất phổ biến. 
    Web Server là nơi đón nhận các request (yêu cầu) của người dùng, xử lý và trả về kết quả. 
    Apache là một phần mềm mã nguồn mở và miễn phí. Hiện nay,
     ngoài Apache thì cũng có một số Web Server khác, chẳng hạn như là Nginx, IIS, ...

    MySQL: Một hệ quản trị cơ sở dữ liệu quan hệ mã nguồn mở. 
    Hệ quản trị CSDL có chức năng lưu trữ dữ liệu, bảo mật, 
    cung cấp công cụ để truy xuất dữ liệu và nhiều tính năng khác. 
    Ngoài MySQL thì còn có rất nhiều các hệ quản trị CSDL khác, 
    chẳng hạn như SQL Server, Oracle DB, PostgreSQL, MariaDB...

    PHP: Ngôn ngữ lập trình phía server (server-side). Chức năng của PHP là xử lý yêu cầu của người dùng
     và sinh ra kết quả để trả về cho người dùng (thường các trang PHP sẽ sinh ra mã HTML 
     để hiển thị trên các trình duyệt). 
     Ngoài PHP thì còn có rất nhiều ngôn ngữ khác làm được công việc tương tự, chẳng hạn Perl, Python, Java...
```
