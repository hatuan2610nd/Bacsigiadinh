package thuoc;

import java.util.ArrayList;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.sqlite.core.DB;

import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class ThuThapToanBoThuoc {

	public static void main(String[] args) {
		// Lấy toàn bộ thuốc trong database ra
		System.out.println("getting dataa");
		List<Thuoc> list = DBThuoc.getInstance().getAllThuoc();
		System.out.println("get done!");
		// Thuoc t = list.get(0);
		int count = 0;
		for (Thuoc t : list) {
		
			try {
		
				
				
				// Lấy html của thuốc về
				Document doc = Jsoup.connect(t.getUrl()).get();
				
				// Bóc tách
				BocTachThuoc.document = doc;
				BocTachThuoc.BocTach(t);

				DBThuoc.getInstance().updateChiTietThuoc(t);

				// Cập nhật lại
			} catch (Exception e) {
				System.out.println(e.getMessage());
				if(e.getMessage().toLowerCase().equals("read timed out"))
					try {
						System.out.println("sleeping...");
						Thread.sleep(5000);
					} catch (InterruptedException e1) {
						// TODO Auto-generated catch block
						e1.printStackTrace();
					}
			}
		}
		
		try {
			//Runtime runtime = Runtime.getRuntime();
			//Process proc = runtime.exec("shutdown -s -t 0");
			//System.exit(0);
		} catch (Exception e) {
			
		}
	}

	public static void LayPhanNgoai(String[] args) {
		try {
			DBThuoc db = DBThuoc.getInstance();
			List<NhomThuoc> list = db.getAllNhomThuoc();

			for (int k = 2; k < list.size(); k++) {
				NhomThuoc n = list.get(k);
				for (int i = 1; i <= n.getSoTrang(); i++) {
					List<Thuoc> l = ProNew1108.getAllThuocInPage(n, i);

					for (Thuoc t : l)
						db.add(t);

					System.out.println(n.getId() + " - " + i + " : done!");
				}
			}

		} catch (Exception e) {
			e.printStackTrace();
		}

	}
}
