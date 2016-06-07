package thuoc;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import mta.th10.bacsigiadinh.models.NhomThuoc;
import mta.th10.bacsigiadinh.models.Thuoc;

public class ProNew1108 {
	public static String link = "http://www.thuocbietduoc.com.vn/nhom-thuoc-5-4/huong-tam-than.aspx";

	public static String getContentPage(int p) {
		try {
			HttpURLConnection conn = (HttpURLConnection) new URL(link).openConnection();

			conn.setRequestMethod("POST");

			conn.setDoOutput(true);
			OutputStreamWriter writer = new OutputStreamWriter(conn.getOutputStream());

			writer.write("page=" + p);
			writer.flush();
			writer.close();

			// Đọc response
			BufferedReader reader = new BufferedReader(new InputStreamReader(conn.getInputStream()));
			StringBuilder content = new StringBuilder();
			String line;
			while ((line = reader.readLine()) != null)
				content.append(line + "\n");
			reader.close();

			// Content
			String html = content.toString();
			return html;
		} catch (Exception e) {
			e.printStackTrace();
		}
		return null;
	}

	public static Document doc;

	public static String getFirstMedicine() {
		Elements es = doc.getElementsByClass("textlink01_v");

		return es.get(0).text();

		// return null;
	}

	public static void main(String[] args) {
		try {
			for (int i = 72; i < 74; i++) {
				String page = getContentPage(i);
				doc = Jsoup.parse(page);
				System.out.println(getFirstMedicine());
			}

		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public static List<Thuoc> getAllThuocInPage(NhomThuoc nhomThuoc, int page) {
		try {
			List<Thuoc> list = new ArrayList<Thuoc>();
			link = nhomThuoc.getUrl();

			String html = getContentPage(page);
			doc = Jsoup.parse(html);

			int count = 0;
			Elements el = doc.getElementsByTag("td");
			Thuoc thuoc = null;

			// Dạng bào chế và số đăng ký
			for (Element e : el) {
				if (e.attr("class").equals("textdrg_hoz")) {
					count++;
					if (count % 2 != 0) {
						thuoc = new Thuoc();
						thuoc.setId_cate(nhomThuoc.getId());
						thuoc.setDangBaoChe(e.ownText());
					} else {
						thuoc.setSoDangKy(e.ownText());
						list.add(thuoc);
					}
				}
			}

			// Nhà sản xuất
			el = doc.getElementsByClass("compst_link01_s1");
			for (int i = 0; i < list.size(); i++) {
				list.get(i).setNhaSanXuat(el.get(i).ownText());
				// System.out.println(el.get(i).ownText());
			}

			// Tên thuốc và url
			el = doc.getElementsByClass("textlink01_v");
			for (int i = 0; i < el.size(); i += 2) {
				list.get(i / 2).setTenThuoc(el.get(i).ownText());
				list.get(i / 2).setUrl("http://www.thuocbietduoc.com.vn/" + el.get(i).attr("href").substring(3));
				// System.out.println(list.get(i/2).getUrl());
			}

			// Ảnh
			el = doc.getElementsByClass("imgdrg_lst");
			for (int i = 0; i < el.size(); i++) {
				String src = el.get(i).attr("src");
				if (src.contains("http"))
					list.get(i).setImg(src);
				else
					list.get(i).setImg("http://www.thuocbietduoc.com.vn/" + src.substring(3));
				// System.out.println(list.get(i).getImg());
			}

			return list;
		} catch (Exception e) {
			return new ArrayList<>();
		}
	}
}
