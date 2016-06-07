package thuoc;

import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class NetThuoc {
	/**
	 * Lấy danh sách nhóm thuốc
	 */
	public static List<NhomThuoc> getNhomThuoc(String url) {
		try {
			List<NhomThuoc> list = new ArrayList<NhomThuoc>();

			 Document doc = Jsoup.connect(url).get();

			//Document doc = Jsoup.parse(new File("test.html"), "utf-8");

			Elements es = doc.getElementsByTag("a");// .get(1).getElementsByAttributeValue("class",

			// "textpldl");
			int i = 0;
			for (Element e : es) {
				if (e.hasClass("textpldl")) {
					NhomThuoc n = new NhomThuoc();
					i++;

					String t = e.ownText();
					String u = "http://www.thuocbietduoc.com.vn" + e.attr("href").substring(2);

					n.setTenNhomThuoc(t);
					System.out.println(t);
					n.setUrl(u);
					System.out.println("\t" + u);

					list.add(n);
				}
			}

			System.out.println("DONE!");
			return list;
		} catch (Exception e) {

			e.printStackTrace();
		}
		return null;
	}

	/**
	 * Them cac link cua thuoc thuoc nhom
	 */
	public static void getListLinkThuocNhom(NhomThuoc nhom) {
		try {
			Document doc = Jsoup.connect(nhom.getUrl()).get();
			System.out.println("test: " + nhom.getUrl());

			int start = doc.html().lastIndexOf("<b>") + 3;
			int end = doc.html().lastIndexOf("</b>");

			// 1.Lay so luong trang
			int pageCount = Integer.parseInt(doc.html().substring(start, end));
			// 2.Lay thong tin tung trang

			for (int i = 1; i <= pageCount; i++) {
				
			}

			System.out.println("OK");

		} catch (Exception e) {
			e.printStackTrace();
		}

	}
}
