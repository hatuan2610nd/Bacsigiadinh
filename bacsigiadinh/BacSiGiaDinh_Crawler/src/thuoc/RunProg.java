package thuoc;

import java.util.ArrayList;
import java.util.List;

import mta.th10.bacsigiadinh.models.NhomThuoc;

public class RunProg {
	public static void main(String[] args) {
		String url = "http://www.thuocbietduoc.com.vn/thuoc/drgsearch.aspx";
		List<NhomThuoc> nhoms = new ArrayList<NhomThuoc>();
		// Bước 1:Lấy danh sách nhóm thuốc
		nhoms = NetThuoc.getNhomThuoc(url);

		// Bước 2: Đẩy nhóm thuốc vào database

		// Bước 3: Lấy danh sách thuốc của từng nhóm thuốc
		// for (NhomThuoc nhom : nhoms) {
		NetThuoc.getListLinkThuocNhom(nhoms.get(0));
		// }

		// Bước 3_1: Thêm từng thuốc vào csdl
	}
}
